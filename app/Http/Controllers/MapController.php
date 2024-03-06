<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [];
        return view('map', compact('initialMarkers'));
    }
}
