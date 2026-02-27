<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;
use App\Services\ChildService;

class ChildController extends Controller
{
    protected $service;

    public function __construct(ChildService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $childs = $this->service->getAll();
        // return view('child.index', compact('childs'));
        return response('Web View - Child Index');
    }

    public function create()
    {
        // return view('child.create');
        return response('Web View - Child Create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        // return redirect()->route('childs.index');
        return response('Web Action - Child Store Redirect');
    }

    public function show(string $id)
    {
        $child = $this->service->getById($id);
        // return view('child.show', compact('child'));
        return response('Web View - Child Show');
    }

    public function edit(string $id)
    {
        $child = $this->service->getById($id);
        // return view('child.edit', compact('child'));
        return response('Web View - Child Edit');
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        // return redirect()->route('childs.index');
        return response('Web Action - Child Update Redirect');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        // return redirect()->route('childs.index');
        return response('Web Action - Child Destroy Redirect');
    }
}
