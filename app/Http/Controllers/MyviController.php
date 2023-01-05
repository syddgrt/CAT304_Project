<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class MyviController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('myvi');
    }
}