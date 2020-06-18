<?php

namespace App\Http\Controllers;
use App\Cani;
use Illuminate\Http\Request;

class CaniController extends Controller
{
  public function index(){
    $cani = Cani::all();

    return view('output', compact('cani'));
  }

  public function showDogs($id){
    $cane = Cani::findOrFail($id);

    return view('singleDog',compact('cane'));
  }
}
