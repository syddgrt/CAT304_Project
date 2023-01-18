<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function show()
    {
        //  $markers = Marker::all();
        $markers = Marker::all();

        
        $rows = DB::table('markers')->select('latitude','longitude','title')->get();
         
        $initialMarkers = [];
        foreach ($rows as $object){
  

        $initialMarkers []= [
            
           'position' => [
                'lng' => $object->longitude,
                'lat' => $object->latitude,
                'tit' => $object ->title
           ]
           ];
         

        //     [
        //         'position' => [
        //             'lat' => 5.357433,
        //             'lng' => 100.303032
        //         ],
        //         'draggable' => true
        //     ],
        //     [
        //         'position' => [
        //             'lat' => 5.29437,
        //             'lng' => 100.25645
        //         ],
        //         'draggable' => false
        //     ],
        //     [
        //         'position' => [
        //             'lat' => 5.333285,
        //             'lng' => 100.306838
        //         ]
            
        //     ]
            
            
        // ];
        }
      
        return view('googleMaps', ['initialMarkers'=>$initialMarkers]);
    }
}
