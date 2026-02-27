<?php

namespace App\Http\Controllers;

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
        $diaryEntrys = $this->service->getAll();
        // return view('diaryEntry.index', compact('diaryEntrys'));
        return response('Web View - DiaryEntry Index');
    }

    public function create()
    {
        // return view('diaryEntry.create');
        return response('Web View - DiaryEntry Create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        // return redirect()->route('diaryEntrys.index');
        return response('Web Action - DiaryEntry Store Redirect');
    }

    public function show(string $id)
    {
        $diaryEntry = $this->service->getById($id);
        // return view('diaryEntry.show', compact('diaryEntry'));
        return response('Web View - DiaryEntry Show');
    }

    public function edit(string $id)
    {
        $diaryEntry = $this->service->getById($id);
        // return view('diaryEntry.edit', compact('diaryEntry'));
        return response('Web View - DiaryEntry Edit');
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        // return redirect()->route('diaryEntrys.index');
        return response('Web Action - DiaryEntry Update Redirect');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        // return redirect()->route('diaryEntrys.index');
        return response('Web Action - DiaryEntry Destroy Redirect');
    }
}
