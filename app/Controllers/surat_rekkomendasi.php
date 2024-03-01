<?php

namespace App\Controllers;

use App\Models\surat_rekomendasiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class surat_rekomendasi extends BaseController
{
    public function index()
    {
    // buat object model $surat_rekomendasi
    $surat_rekomendasi = new surat_rekomendasiModel();

    /*
     siapkan data untuk dikirim ke view dengan nama $surat_rekomendasis
     dan isi datanya dengan letter yang sudah terbit
    */
    $data['surat_rekomendasis'] = $surat_rekomendasi->where('status', 'published')->findAll();

    // kirim data ke view
    echo view('surat_rekomendasi', $data);
    }

    //------------------------------------------------------------

    public function viewLetter($slug)
    {
        $surat_rekomendasi = new surat_rekomendasiModel();
        $data['surat_rekomendasi'] = $surat_rekomendasi->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // tampilkan 404 error jika data tidak ditemukan
        if (!$data['surat_rekomendasi']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('surat_rekomendasi_detail', $data);
    }
}