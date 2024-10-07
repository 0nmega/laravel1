<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        // Logika konferencijų sąrašui atvaizduoti
        return view('client.conferences.index');
    }

    public function show($id)
    {
        // Logika konkrečiai konferencijai atvaizduoti
        return view('client.conferences.show', ['id' => $id]);
    }

    public function register(Request $request)
    {
        // Logika klientui registruotis į konferenciją
        return redirect()->back()->with('success', 'Successfully registered!');
    }
}
