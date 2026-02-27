<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;
use App\Services\ReminderService;

class ReminderController extends Controller
{
    protected $service;

    public function __construct(ReminderService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $reminders = $this->service->getAll();
        // return view('reminder.index', compact('reminders'));
        return response('Web View - Reminder Index');
    }

    public function create()
    {
        // return view('reminder.create');
        return response('Web View - Reminder Create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        // return redirect()->route('reminders.index');
        return response('Web Action - Reminder Store Redirect');
    }

    public function show(string $id)
    {
        $reminder = $this->service->getById($id);
        // return view('reminder.show', compact('reminder'));
        return response('Web View - Reminder Show');
    }

    public function edit(string $id)
    {
        $reminder = $this->service->getById($id);
        // return view('reminder.edit', compact('reminder'));
        return response('Web View - Reminder Edit');
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        // return redirect()->route('reminders.index');
        return response('Web Action - Reminder Update Redirect');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        // return redirect()->route('reminders.index');
        return response('Web Action - Reminder Destroy Redirect');
    }
}
