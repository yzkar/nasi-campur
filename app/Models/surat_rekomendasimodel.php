<?php

namespace App\Models;

use CodeIgniter\Model;

class surat_rekomendasiModel extends Model
{
    protected $table      = 'surat_rekomendasi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['kop', 'no', 'nama1', 'jabatan', 'nip', 'e-mail', 'telp', 'nama2', 'nim', 'jurusan', 'fakultas', 'semester', 'ipk', 'sks', 'isi', 'tanggal', 'nama_pengirim', 'status', 'slug'];
}
