<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MapController extends Controller
{
    public function show()
    {
        //  $markers = Marker::all();
        $markers = Marker::all();

        
        $rows = DB::table('markers')->select('latitude','longitude','title','id','status')->get();
         
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
    
        
        $category = Category::all();
    
        $current_user_id = Auth::id();
        return view('cmarker', compact('category','current_user_id'));
    }
    

        public function store(Request $request)
    {
        $student = new Marker;
        $student->title = $request->input('title');
        $student->latitude = $request->input('latitude');
        $student->longitude = $request->input('longitude');
        $student->category_id = $request->input('category_id');
        $student->description = $request->input('description');
        $student->status = $request->input('status');
        $student->user_id = $request->input('user_id');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/storage/image/', $filename);
            $student->image = $filename;
        }

        $student->save();
        return redirect()->back()->with('message','Image Upload Successfully');

        
   
        $student->save();
        return redirect()->back()->with('message','Marker Created Successfully');
    }


    public function markers(){
        $markering = Marker::all();
        return view('mapmarker', compact('markering'));
    }


    
    public function edit($id)
    {
        $student = Marker::find($id);
        $category = Category::all();
        $current_user_id = Auth::id();

        return view('editmarker',compact('student','category','current_user_id'));
        //return view('cmarker', compact('category','current_user_id'));
    }


    public function update(Request $request, $id)
    {
        $student = Marker::find($id);
        //$student->user_id = $request->input('user_id');
        $student->latitude = $request->input('latitude');
        $student->longitude = $request->input('longitude');
        $student->title = $request->input('title');
        $student->category_id = $request->input('category_id');
        $student->description = $request->input('description');
        $student->status = $request->input('status');

        if($request->hasfile('image'))
        {
            $destination='public/storage/image/'.$student->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/storage/image/', $filename);
            $student->image = $filename;
        }
        $student->update();
        session()->flash('status','Marker Updated Successfully');
        return redirect()->back();


    }


    public function destroy($id)
    {
        $student = Marker::find($id);
    
        $student->delete();
        session()->flash('status','Marker Deleted Successfully');
        return redirect()->back();
    }

    public function marker($id){
       
        // $food = Food::with('user')->find($id);
        // $foods = Marker::where($id)->with('category','user')->get();
        $markers = Marker::where('id',$id)->with('category','user')->get();
        //dd($foods);
        return view('marker', compact('markers'));
    }


    
}




