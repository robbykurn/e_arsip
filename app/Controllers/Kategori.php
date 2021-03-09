<?php

namespace App\Controllers;

use App\Models\Model_kategori;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->Model_kategori = new Model_kategori();
    }
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->Model_kategori->all_data(),
            'isi' => 'v_kategori'

        );
        return view('layout/v_wrapper', $data);
    }
}