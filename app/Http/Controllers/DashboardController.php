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

class DashboardController extends Controller
{
    public function index()
    {
       //$foods = Food::with('category','user')->get();
        $markers = Marker::with('category','user')->get();
        //dd($foods);
        return view('home', compact('markers'));
    }
}
