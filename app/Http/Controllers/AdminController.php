<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $totalReports = Marker::count();
        $resolvedReports = Marker::where('status', 'Resolved')->count();
        $inProgressReports = Marker::where('status', 'Ongoing')->count();
        $rows = DB::table('categories')->get();
        $row1 = Marker::with('user','category')->get();
        $data = DB::table('markers')->select(DB::raw('COUNT(*) as count, category_id'))->groupBy('category_id')->get();

        return view('adminMain', compact('rows','row1','totalReports','resolvedReports','inProgressReports','data'));

        
    }

    public function index2($id)
    {
        $marker = Marker::find($id);
        dd($marker);
        return view('adminMain', compact('marker'));
    }

    // public function index3(){

       
    //     return view('adminMain', compact('data'));
    // }

    public function updateStatus(Request $request, $id)
    {
        $marker = Marker::find($id);
        $marker->status = $request->status;
        $marker->save();
        return redirect()->back();
    }

}
