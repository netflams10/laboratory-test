<?php

namespace App\Services;

use App\Repositories\LaboratoryRepositories;
use App\Repositories\PatientRepositories;
use Symfony\Component\HttpFoundation\Response;

class LaboratoryScanService 
{
    private LaboratoryRepositories $laboratories;       

    public function __construct(LaboratoryRepositories $laboratories)
    {
        $this->laboratories = $laboratories;
    }

    public function index ($patient_id)
    {
        return ['message' => ['status' => 'success', 'data' => $this->laboratories->index_id($patient_id)], "status" => Response::HTTP_OK];
    }


    public function show ($id)
    {
        return ['message' => ['status' => 'success', 'data' => $this->laboratories->show($id)], "status" => Response::HTTP_OK];
    }

    public function update ($request)
    {
        $laboratory = $this->laboratories->update($request);
        if ($laboratory) {
            return ['message' => ['status' => 'success', 'data' => $this->laboratories->show($request->laboratory_id)], 'status' => Response::HTTP_OK];
        }
        return ['message' => ['status' => 'failed'], 'status' => Response::HTTP_UNPROCESSABLE_ENTITY];
    }
}