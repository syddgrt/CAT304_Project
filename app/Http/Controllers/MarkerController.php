<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkerController extends Controller
{
    public function saveMarker(Request $request)
{
    $marker = new Marker;
    $marker->info = $request->info;
    $marker->lat = $request->lat;
    $marker->lng = $request->lng;
    $marker->save();
    return response()->json(['success' => 'Marker saved successfully.']);
}

}
