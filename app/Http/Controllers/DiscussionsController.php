<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create(){

      return View('discuss');
    }

    public function store(){
      dd();
    }
}
