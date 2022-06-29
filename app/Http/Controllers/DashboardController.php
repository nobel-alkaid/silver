<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Room;
use App\Models\Sejour;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        return view('dashboard.index', [
            'rooms' => Room::all()->count(),
            'clients' => Client::all()->count(),
            'sejours' => Sejour::all()->count(),
        ]);
    }

    public function notFoundError() 
    {
        return view('dashboard.error404');
    }

    public function redirectToLogin() 
    {
        return redirect()->route('login');
    }
}
