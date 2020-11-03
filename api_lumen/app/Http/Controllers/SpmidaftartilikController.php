<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Spmidaftartilik;

class SpmidaftartilikController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  public function index()     
    {        
    return Spmidaftartilik::all(); 
    }   

    //
}
