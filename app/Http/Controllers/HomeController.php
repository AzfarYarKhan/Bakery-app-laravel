<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bakeryitems;

class HomeController extends Controller
{
       public function index(){
     
        $bakeryitems =  bakeryitems::all();
        return view('pages.home')->with('bakeryitems', $bakeryitems);
    }
}
