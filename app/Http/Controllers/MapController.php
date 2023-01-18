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
                    'lat' => 5.357433,
                    'lng' => 100.303032
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 5.29437,
                    'lng' => 100.25645
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 5.333285,
                    'lng' => 100.306838
                ]
            
            ]
            
            
        ];
        return view('googleMaps', compact('initialMarkers'));
    }
}
