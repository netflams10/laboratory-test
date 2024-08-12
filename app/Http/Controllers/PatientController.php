<?php

namespace App\Http\Controllers;

use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    private $service;

    public function __construct(PatientService $service)
    {
        $this->service = $service;
    }

    public function index ()
    {
        $response = $this->service->index();
        return response($response['message'], $response['status']);
    }

    public function show ($id)
    {
        $response = $this->service->show($id);
        return response($response['message'], $response['status']);
    }
}

