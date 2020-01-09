<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{ 
    public function index(){
      
     return view('galerija.index');
  }
  public function about(){
     
     return view('pages.about');
  }





public function services(){
     
   return view('pages.services');
}

}

