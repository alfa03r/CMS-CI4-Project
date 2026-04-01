<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini Controller coba method index";
    }

    public function about($nama = '')
    {
        echo "Halo, Nama Saya $nama .";

    }
}
