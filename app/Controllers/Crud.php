<?php

namespace App\Controllers;

class Crud extends BaseController
{
    public function index(): string
    {
        return view('crud/index');
    }
}

