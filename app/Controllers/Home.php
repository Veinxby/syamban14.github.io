<?php

namespace App\Controllers;

use App\Models\Perpustakaan;

class Home extends BaseController
{

    protected $dataBuku;

    public function __construct()
    {
        $this->dataBuku = new Perpustakaan();
    }

    public function index(): string
    {
        $data = [
            'buku' => $this->dataBuku->getDataBuku()
        ];
        return view('home/index', $data);
    }
}
