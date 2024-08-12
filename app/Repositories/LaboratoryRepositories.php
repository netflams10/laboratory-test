<?php

namespace App\Repositories;

use App\Interface\LaboratoryInterface;
use App\Models\Laboratory;

class LaboratoryRepositories implements LaboratoryInterface
{
    private $model;

    public function __construct(Laboratory $model)
    {
        $this->model = $model;
    }

    public function index ()
    {
        return $this->model->latest()->paginate(10);
    }

    public function index_id($id)
    {
        return $this->model->with('crt_scan', 'mri')->where('patient_id', $id)->paginate(10);
    }

    public function show ($id)
    {
        return $this->model->with('crt_scan', 'mri', 'xrays', 'ultrasound_scan')->where('id', $id)->first(); 
    }

    public function store ($request)
    {}

    public function update ($request)
    {
        return $this->model->where('id', $request->laboratory_id)
            ->update([
                'ct_scan_id'  => $request->ct_scan_id, 
                'mri_id'      => $request->mri_id
            ]);                 
    }

    public function delete ($id)
    {}
}
