<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $rows = DB::table('categories')->get();
        // $row1 = DB::table('markers')->get();
        $row1 = Marker::with('user','category')->get();
        return view('adminMain', compact('rows','row1'));
    }

    

}
