<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/dashboard');
    }
}