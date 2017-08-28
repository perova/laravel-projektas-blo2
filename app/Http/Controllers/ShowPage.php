<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View;

class ShowPage extends Controller
{
    public function __invoke($pageTitle){

      if (\View::exists($pageTitle)){

      return view ($pageTitle);}
      abort(404);
    }
}
