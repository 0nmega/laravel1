<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conference;


class AdminConferenceController extends Controller
{
    public function index()
    {
        // Paimti visas konferencijas iš duomenų bazės
        $conferences = Conference::all();

        // Perduoti konferencijų sąrašą į vaizdą
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        Conference::create($validated);

        return redirect()->route('admin.conferences.index');

    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $conference = Conference::findOrFail($id);
        $conference->update($validated);

        return redirect()->route('admin.conferences.index');


    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();
        return redirect()->route('admin.conferences.index');

    }
}
