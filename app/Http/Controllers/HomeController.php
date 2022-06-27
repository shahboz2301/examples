<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('app');
    }
     public function members ()
        {
           $members=[
           'hcabjkccsknc',
           'asjkncjkackc',
           'cabjsnanc '
           ];
            return view('members', compact('members'));
        }
      public function abaut ()
             {
                 return view('abaut');
             }
}
