<?php

namespace App\Controllers;

use App\Models\CrudModel;

define('_TITLE', 'CRUD');

class Crud extends BaseController
{
    private $crud_model;
    public function __construct()
    {
        $this->crud_model = new CrudModel();
    }
    
    public function index()
    {
        $data_crud = $this->crud_model->findAll();

        $data = [
            'title' => _TITLE,
            'data_crud' => $data_crud
        ];

        return view('crud/index', $data);
    }
}

