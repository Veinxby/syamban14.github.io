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

    public function create()
    {
        $data = [
            'title' => 'Create New Galery'
        ];
        return view('layout/header', $data)
            . view('galeri/form_upload')
            . view('layout/footer');
    }

    public function simpan()
    {
        $this->dataUser->save([
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        return redirect()->to('/home');
    }
}
