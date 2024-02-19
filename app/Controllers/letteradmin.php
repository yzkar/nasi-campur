<?php

namespace App\Controllers;

use \App\Models\letterModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class letterAdmin extends BaseController
{
    public function index()
    {
        $letter = new letterModel();
        $data['letteres'] = $letter->findAll();
        echo view('admin_list_letter', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        $letter = new letterModel();
        $data['letter'] = $letter->where('id', $id)->first();

        if (!$data['letter']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('letter_detail', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $letter = new letterModel();
            $letter->insert([
                "title" => $this->request->getPost('title'),
                "alamat" => $this->request->getPost('alamat'),
                "no" => $this->request->getPost('no'),
                "perihal" => $this->request->getPost('perihal'),
                "lampiran" => $this->request->getPost('lampiran'),
                "content" => $this->request->getPost('content'),
                "tanggal" => $this->request->getPost('tanggal'),
                "pengirim" => $this->request->getPost('pengirim'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('admin/letter');
        }

        // tampilkan form create
        echo view('admin_create_letter');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $letter = new letterModel();
        $data['letter'] = $letter->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $letter->update($id, [
                "title" => $this->request->getPost('title'),
                "alamat" => $this->request->getPost('alamat'),
                "no" => $this->request->getPost('no'),
                "perihal" => $this->request->getPost('perihal'),
                "lampiran" => $this->request->getPost('lampiran'),
                "content" => $this->request->getPost('content'),
                "tanggal" => $this->request->getPost('tanggal'),
                "pengirim" => $this->request->getPost('pengirim'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/letter');
        }

        // tampilkan form edit
        echo view('admin_edit_letter', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $letter = new letterModel();
        $letter->delete($id);
        return redirect('admin/letter');
    }
}
