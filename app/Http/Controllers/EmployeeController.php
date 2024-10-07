<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Atvaizduoti visų konferencijų sąrašą darbuotojui
        return view('employee.conferences.index');
    }

    public function show($id)
    {
        // Atvaizduoti vieną konkrečią konferenciją ir klientus, kurie yra užsiregistravę
        return view('employee.conferences.show', compact('id'));
    }
}
