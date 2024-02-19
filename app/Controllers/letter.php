<?php

namespace App\Controllers;

use App\Models\LetterModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Letter extends BaseController
{
    public function index()
    {
    // buat object model $letter
    $letter = new LetterModel();

    /*
     siapkan data untuk dikirim ke view dengan nama $letteres
     dan isi datanya dengan letter yang sudah terbit
    */
    $data['letteres'] = $letter->where('status', 'published')->findAll();

    // kirim data ke view
    echo view('letter', $data);
    }

    //------------------------------------------------------------

    public function viewLetter($slug)
    {
        $letter = new LetterModel();
        $data['letter'] = $letter->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // tampilkan 404 error jika data tidak ditemukan
        if (!$data['letter']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('letter_detail', $data);
    }
}