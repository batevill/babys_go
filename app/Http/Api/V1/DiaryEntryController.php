<?php

namespace App\Http\Api\V1;

use App\Http\Controller;
use Illuminate\Http\Request;
use App\Services\DiaryEntryService;

class DiaryEntryController extends Controller
{
    protected $service;

    public function __construct(DiaryEntryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service->getAll());
    }

    public function store(Request $request)
    {
        $data = $this->service->create($request->all());
        return response()->json($data, 201);
    }

    public function show(string $id)
    {
        return response()->json($this->service->getById($id));
    }

    public function update(Request $request, string $id)
    {
        $data = $this->service->update($id, $request->all());
        return response()->json($data);
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}
