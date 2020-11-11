<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = 'orang';
    protected $useTimestamp = true;
    protected $allowedFields = ['nama', 'alamat'];

    public function search($keyword)
    {
        return $this->table('orang')->like('nama', $keyword)->orLike('alamat', $keyword);
    }
}
