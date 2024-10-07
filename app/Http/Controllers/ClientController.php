<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('client.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);
        return view('client.conferences.show', compact('conference'));
    }
    public function store(Request $request, $conferenceId)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:clients,email',
            ]);
            Client::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'conference_id' => $conferenceId,
            ]);

            return redirect()->route('conferences.show', $conferenceId)->with('success', 'Registracija sėkminga!');
        }

}
