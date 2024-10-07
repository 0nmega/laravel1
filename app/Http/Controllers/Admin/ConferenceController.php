<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        // Gauti visas konferencijas
        $conferences = Conference::all();

        // Perduoti $conferences į view
        return view('admin.conferences.index', compact('conferences'));
    }
}
