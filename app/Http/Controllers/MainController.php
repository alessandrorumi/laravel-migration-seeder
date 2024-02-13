<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class MainController extends Controller
{

    public function index() {

        $today = now()->toDateString();
        $trains = Train::whereDate('departure_time', $today)
                       ->orderBy('departure_time')
                       ->get();

        return view('pages.index', compact('trains'));
    }
    
}
