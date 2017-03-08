<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rio;

class soba extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
    {
      $a = User::all();
      return view('switchDir/switchhome');
    }

  public function create()
  {
    return view('switchDir/switchhomeCreate');
  }

  public function store(Request $request)
  {
      Rio::create($request->all());
      return redirect()->back();
  }

}
