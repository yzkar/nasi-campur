<?php

namespace App\Controllers;

use App\Models\komikModel;

class komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new komikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'daftar komik',
            'komik' => $this->komikModel->getkomik()
        ];

        // $komikModel = new \App\Models\komikModel();
        // $komikModel = new komikModel();


        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'detail komik',
            'komik' => $this->komikModel->getkomik($slug)
        ];
        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'form tambah data komik'
        ];

        return view('komik/create', $data);
    }
}
