<?php

namespace App\Models;

use CodeIgniter\Model;

class surkomModel extends Model
{
    protected $table      = 'surkom';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'no', 'nama1', 'jabatan', 'nip', 'e-mail', 'telp', 'nama2', 'nim', 'jurusan', 'fakultas', 'semester', 'ipk', 'sks', 'content', 'tanggal', 'nama pengirim', 'status', 'slug'];
}
