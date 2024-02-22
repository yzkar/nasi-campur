<?php

namespace App\Models;

use CodeIgniter\Model;

class LetterModel extends Model
{
    protected $table      = 'letter';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'alamat', 'no', 'perihal', 'lampiran', 'content', 'tanggal', 'pengirim', 'nip', 'status', 'slug'];
}
