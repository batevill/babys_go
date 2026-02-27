<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;
use App\Services\MedicalRecordService;

class MedicalRecordController extends Controller
{
    protected $service;

    public function __construct(MedicalRecordService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $medicalRecords = $this->service->getAll();
        // return view('medicalRecord.index', compact('medicalRecords'));
        return response('Web View - MedicalRecord Index');
    }

    public function create()
    {
        // return view('medicalRecord.create');
        return response('Web View - MedicalRecord Create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        // return redirect()->route('medicalRecords.index');
        return response('Web Action - MedicalRecord Store Redirect');
    }

    public function show(string $id)
    {
        $medicalRecord = $this->service->getById($id);
        // return view('medicalRecord.show', compact('medicalRecord'));
        return response('Web View - MedicalRecord Show');
    }

    public function edit(string $id)
    {
        $medicalRecord = $this->service->getById($id);
        // return view('medicalRecord.edit', compact('medicalRecord'));
        return response('Web View - MedicalRecord Edit');
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        // return redirect()->route('medicalRecords.index');
        return response('Web Action - MedicalRecord Update Redirect');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        // return redirect()->route('medicalRecords.index');
        return response('Web Action - MedicalRecord Destroy Redirect');
    }
}
