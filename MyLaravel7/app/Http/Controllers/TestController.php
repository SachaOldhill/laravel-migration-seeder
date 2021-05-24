<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function home() {
    // $movies = Movie::all();
    // dd($movies);
    return view('pages.home');
  }
}
