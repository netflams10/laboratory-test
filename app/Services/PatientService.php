<?php

namespace App\Services;

use App\Repositories\PatientRepositories;
use Symfony\Component\HttpFoundation\Response;

class PatientService 
{
    private PatientRepositories $patient;       

    public function __construct(PatientRepositories $patient)
    {
        $this->patient = $patient;
    }

    public function index ()
    {
        return ['message' => ['status' => 'success', 'data' => $this->patient->index()], "status" => Response::HTTP_OK];
    }


    public function show ($id)
    {
        return ['message' => ['status' => 'success', 'data' => $this->patient->show($id)], "status" => Response::HTTP_OK];
    }
}