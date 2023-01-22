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

        
        $rows = DB::table('markers')->select('latitude','longitude','title','id')->get();
         
        $initialMarkers = [];
        foreach ($rows as $object){
  

        $initialMarkers []= [
            
           'position' => [
                'lng' => $object->longitude,
                'lat' => $object->latitude,
                'tit' => $object ->title,
                'id' => $object -> id
           ],
           'draggable' => false
           
           ];
           
        
        }
      
        return view('googleMaps', ['initialMarkers'=>$initialMarkers]);
    }


    public function imageForm()
    { 
    
        
        return view('cmarker');
    }
    

        public function store(Request $request)
    {
        $student = new Marker;
        $student->title = $request->input('title');
        $student->latitude = $request->input('latitude');
        $student->longitude = $request->input('longitude');

        
   
        $student->save();
        return redirect()->back()->with('message','Marker Created Successfully');
    }
    
}




