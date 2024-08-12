<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaboratoryUpdateRequest;
use App\Services\LaboratoryService;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    private $service;

    public function __construct(LaboratoryService $service)
    {
        $this->service = $service;
    }

    public function index ($patient_id)
    {
        $response = $this->service->index($patient_id);
        return response($response['message'], $response['status']);
    }

     public function show ($id)
    {
        $response = $this->service->show($id);
        return response($response['message'], $response['status']);
    }

    public function update (LaboratoryUpdateRequest $request)
    {       
        $response = $this->service->update($request);
        return response($response['message'], $response['status']);
    }
}
