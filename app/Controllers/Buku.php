<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Buku extends BaseController
{
    public function index()
    {
        return view('buku/index');
    }
}
