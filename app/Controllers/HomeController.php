<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = $this->request->all();
        echo  'hello from home index';
    }

    public function update()
    {
        echo  'hello from home update';
    }
}