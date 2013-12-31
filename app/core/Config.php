<?php

namespace App\Core;

class Config
{
    protected $data;

    public function load($file)
    {
        $this->data = require $file;
    }
}