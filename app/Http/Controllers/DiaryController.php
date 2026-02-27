<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;
use App\Services\DiaryService;

class DiaryController extends Controller
{
    protected $service;

    public function __construct(DiaryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $diarys = $this->service->getAll();
        // return view('diary.index', compact('diarys'));
        return response('Web View - Diary Index');
    }

    public function create()
    {
        // return view('diary.create');
        return response('Web View - Diary Create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        // return redirect()->route('diarys.index');
        return response('Web Action - Diary Store Redirect');
    }

    public function show(string $id)
    {
        $diary = $this->service->getById($id);
        // return view('diary.show', compact('diary'));
        return response('Web View - Diary Show');
    }

    public function edit(string $id)
    {
        $diary = $this->service->getById($id);
        // return view('diary.edit', compact('diary'));
        return response('Web View - Diary Edit');
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        // return redirect()->route('diarys.index');
        return response('Web Action - Diary Update Redirect');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        // return redirect()->route('diarys.index');
        return response('Web Action - Diary Destroy Redirect');
    }
}
