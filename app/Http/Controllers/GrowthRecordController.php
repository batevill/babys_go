<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;
use App\Services\GrowthRecordService;

class GrowthRecordController extends Controller
{
    protected $service;

    public function __construct(GrowthRecordService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $growthRecords = $this->service->getAll();
        // return view('growthRecord.index', compact('growthRecords'));
        return response('Web View - GrowthRecord Index');
    }

    public function create()
    {
        // return view('growthRecord.create');
        return response('Web View - GrowthRecord Create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        // return redirect()->route('growthRecords.index');
        return response('Web Action - GrowthRecord Store Redirect');
    }

    public function show(string $id)
    {
        $growthRecord = $this->service->getById($id);
        // return view('growthRecord.show', compact('growthRecord'));
        return response('Web View - GrowthRecord Show');
    }

    public function edit(string $id)
    {
        $growthRecord = $this->service->getById($id);
        // return view('growthRecord.edit', compact('growthRecord'));
        return response('Web View - GrowthRecord Edit');
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        // return redirect()->route('growthRecords.index');
        return response('Web Action - GrowthRecord Update Redirect');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        // return redirect()->route('growthRecords.index');
        return response('Web Action - GrowthRecord Destroy Redirect');
    }
}
