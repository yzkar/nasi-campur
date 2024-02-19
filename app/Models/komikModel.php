<?php

namespace App\Models;

use CodeIgniter\Model;

class komikModel extends Model
{
  protected $table = 'komik';
  protected $primaryKey = 'id';

  // protected $useTimestamps = true;

  protected $returnType     = 'array';
  // protected $useSoftDeletes = true;

  protected $allowedFields = ['name', 'email'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  public function getkomik($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
