<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 50.0832,
                    'lng' => 14.4353
                ],
               // 'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 48.864716,
                    'lng' => 2.349014
                ],
                //'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 52.3791,
                    'lng' => 4.9003
                ],
                //'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 52.5251,
                    'lng' => 13.3694
                ],
                //'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];
        return view('map', compact('initialMarkers'));
    }
}
