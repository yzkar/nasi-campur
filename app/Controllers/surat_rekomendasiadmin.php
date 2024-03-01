<?php

namespace App\Controllers;

use \App\Models\surat_rekomendasiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class surat_rekomendasiAdmin extends BaseController
{
    public function index()
    {
        $surat_rekomendasi = new surat_rekomendasiModel();
        $data['surat_rekomendasis'] = $surat_rekomendasi->findAll();
        echo view('admin_list_surat_rekomendasi', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        $surat_rekomendasi = new surat_rekomendasiModel();
        $data['surat_rekomendasi'] = $surat_rekomendasi->where('id', $id)->first();

        if (!$data['surat_rekomendasi']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('surat_rekomendasi_detail', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['surat_rekomendasi' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $surat_rekomendasi = new surat_rekomendasiModel();
            $surat_rekomendasi->insert([
                "kop" => $this->request->getPost('kop'),
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
                "isi" => $this->request->getPost('isi'),
                "tanggal" => $this->request->getPost('tanggal'),
                "nama pengirim" => $this->request->getPost('nama pengirim'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('kop'), '-', TRUE)
            ]);
            return redirect('admin/surat_rekomendasi');
        }

        // tampilkan form create
        echo view('admin_create_surat_rekomendasi');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $surat_rekomendasi = new surat_rekomendasiModel();
        $data['surat_rekomendasi'] = $surat_rekomendasi->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'kop' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $surat_rekomendasi->update($id, [
                "kop" => $this->request->getPost('kop'),
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
                "isi" => $this->request->getPost('isi'),
                "tanggal" => $this->request->getPost('tanggal'),
                "nama pengirim" => $this->request->getPost('nama pengirim'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/surat_rekomendasi');
        }

        // tampilkan form edit
        echo view('admin_edit_surat_rekomendasi', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $letter = new surat_rekomendasiModel();
        $letter->delete($id);
        return redirect('admin/surat_rekomendasi');
    }
}
