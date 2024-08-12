<?php

namespace App\Repositories;

use App\Interface\PatientInterface;
use App\Models\Patient;

class PatientRepositories implements PatientInterface
{
    private $model;

    public function __construct(Patient $model)
    {
        $this->model = $model;
    }

    public function index ()
    {
        return $this->model->latest()->paginate(10);
    }

    public function show ($id)
    {
        return $this->model->where('id', $id)->first(); 
    }

    public function store ($request)
    {}

    public function update ($request)
    {}

    public function delete ($id)
    {}
}
