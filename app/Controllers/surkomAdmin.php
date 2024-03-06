<?php

namespace App\Controllers;

use \App\Models\surkomModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class surkomAdmin extends BaseController
{
    public function index()
    {
        $surkom = new surkomModel();
        $data['surkomes'] = $surkom->findAll();
        echo view('admin_list_surkom', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        $surkom = new surkomModel();
        $data['surkom'] = $surkom->where('id', $id)->first();

        if (!$data['surkom']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('surkom_detail', $data);
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
            $surkom = new surkomModel();
            $surkom->insert([
                "title" => $this->request->getPost('title'),
                "no" => $this->request->getPost('no'),
                "nama1" => $this->request->getPost('nama1'),
                "jabatan" => $this->request->getPost('jabatan'),
                "nip" => $this->request->getPost('nip'),
                "e-mail" => $this->request->getPost('e-mail'),
                "telp" => $this->request->getPost('telp'),
                "nama2" => $this->request->getPost('nama2'),
                "nim" => $this->request->getPost('nim'),
                "jurusan" => $this->request->getPost('jurusan'),
                "fakultas" => $this->request->getPost('fakultas'),
                "semester" => $this->request->getPost('semester'),
                "ipk" => $this->request->getPost('ipk'),
                "sks" => $this->request->getPost('sks'),
                "content" => $this->request->getPost('content'),
                "tanggal" => $this->request->getPost('tanggal'),
                "nama_pengirim" => $this->request->getPost('nama_pengirim'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('admin/surkom');
        }

        // tampilkan form create
        echo view('admin_create_surkom');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $surkom = new surkomModel();
        $data['surkom'] = $surkom->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $surkom->update($id, [
                "title" => $this->request->getPost('title'),
                "no" => $this->request->getPost('no'),
                "nama1" => $this->request->getPost('nama1'),
                "jabatan" => $this->request->getPost('jabatan'),
                "nip" => $this->request->getPost('nip'),
                "e-mail" => $this->request->getPost('e-mail'),
                "telp" => $this->request->getPost('telp'),
                "nama2" => $this->request->getPost('nama2'),
                "nim" => $this->request->getPost('nim'),
                "jurusan" => $this->request->getPost('jurusan'),
                "fakultas" => $this->request->getPost('fakultas'),
                "semester" => $this->request->getPost('semester'),
                "ipk" => $this->request->getPost('ipk'),
                "sks" => $this->request->getPost('sks'),
                "content" => $this->request->getPost('content'),
                "tanggal" => $this->request->getPost('tanggal'),
                "nama_pengirim" => $this->request->getPost('nama_pengirim'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/surkom');
        }

        // tampilkan form edit
        echo view('admin_edit_surkom', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $surkom = new surkomModel();
        $surkom->delete($id);
        return redirect('admin/surkom');
    }
}
