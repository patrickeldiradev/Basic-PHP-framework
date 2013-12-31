<?php

namespace App\Core;

class Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}