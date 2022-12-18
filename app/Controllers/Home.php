<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('section/header');
        echo view('section/apropos');
        echo view('section/service');
        echo view('section/contact');
        echo view('section/footer');
    }
}
