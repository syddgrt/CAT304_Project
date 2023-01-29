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


class urReportController extends Controller
{
    public function index()
    {
        $markers = Marker::with('category','user')->get();
        return view('yourReport', compact('markers'));
    }
}
