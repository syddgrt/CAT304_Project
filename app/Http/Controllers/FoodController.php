<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\User;
use App\Models\Category;
use App\Models\Marker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{
    public function marker($id){
        
        $student = Marker::find($id);
        // $food = Food::with('user')->find($id);
    $foods = Food::where('location_id', $id)->with('category','user')->get();

        return view('marker', compact('foods','student'));
    }

    


    public function imageForm($id)
{ 

    $category = Category::all();
    $location = Marker::find($id);
    
 $current_user_id = Auth::id();
return view('image', compact('category','location','current_user_id'));
}


    public function store(Request $request)
    {
        $student = new Food;
        $student->food_name = $request->input('food_name');
        $student->category_id = $request->input('category_id');
        $student->location_id = $request->input('location_id');
        $student->best_before = $request->input('best_before');
        $student->food_description = $request->input('food_description');
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
    }


    public function edit($id)
    {
        $student = Food::find($id);
        $category = Category::all();
        $locations = Marker::all();
        return view('edit',compact('student','category','locations'));
    }



    public function update(Request $request, $id)
    {
        $student = Food::find($id);
        $student->food_name = $request->input('food_name');
        $student->category_id = $request->input('category_id');
        $student->location_id = $request->input('location_id');
        $student->best_before = $request->input('best_before');
        $student->food_description = $request->input('food_description');
       
        

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
        return redirect()->back()->with('status','Food Updated Successfully');


    }



    public function destroy($id)
    {
        $student = Food::find($id);
        $destination='public/storage/image/'.$student->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $student->delete();
        return redirect()->back()->with('status','Food Deleted Successfully');
    }




    public function show($id){

        $food = Food::find($id);

        $category = Category::all();
        $locations = Marker::all();

        return view('member.single', ['food' => $food], compact('category','locations'));


    }







}


    
    


 
