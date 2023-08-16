<?php

namespace App\Models;

use CodeIgniter\Model;

class Perpustakaan extends Model
{
    protected $dbGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function getDataUser()
    {
        return $this->findAll();
    }
}
