<?php

namespace App\Controllers;

use App\Models\Perpustakaan;

class Home extends BaseController
{

    protected $dataBuku;
    protected $dataUser;

    public function __construct()
    {
        $this->dataUser = new Perpustakaan();
    }

    public function index(): string
    {
        $data = [
            'user' => $this->dataUser->getDataUser()
        ];
        return view('home/index', $data);
    }
}
