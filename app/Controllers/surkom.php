<?php

namespace App\Controllers;

use App\Models\surkomModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class surkom extends BaseController
{
    public function index()
    {
    // buat object model $surkom
    $surkom = new surkomModel();

    /*
     siapkan data untuk dikirim ke view dengan nama $surkomes
     dan isi datanya dengan surkom yang sudah terbit
    */
    $data['surkomes'] = $surkom->where('status', 'published')->findAll();

    // kirim data ke view
    echo view('surkom', $data);
    }

    //------------------------------------------------------------

    public function viewsurkom($slug)
    {
        $surkom = new surkomModel();
        $data['surkom'] = $surkom->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // tampilkan 404 error jika data tidak ditemukan
        if (!$data['surkom']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('surkom_detail', $data);
    }
}