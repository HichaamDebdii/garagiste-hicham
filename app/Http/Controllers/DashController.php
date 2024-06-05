<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Stock;
use App\Models\Vehicule;

class DashController extends Controller
{
    public function index()
    {
        $clientCount = Client::count();
        $stockCount = Stock::count();
        $vehiculeCount = Vehicule::count();

        return view('Dashboard.index', compact('clientCount', 'stockCount', 'vehiculeCount'));
    }
}

