<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
      $auth = \Auth::user();

      return view('layouts.app')->with('auth', $auth);
    }
}
