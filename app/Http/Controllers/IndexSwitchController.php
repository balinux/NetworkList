<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Rio;
class IndexSwitchController extends Controller
{
    public function index()
    {
      // $list = Rio::paginate(1);
      $list = Rio::all();
      return view('index',compact('list'));
    }

    public function search(Request $Request)
    {
      // dd($Request->all());
      // $list = Rio::find($Request->input('search'));
      // return view('page.search',compact('list'));
      // dd($list);
      $list = Rio::where('nama','like', '%'.$Request->input('search').'%')
      ->get();
      return view('index',compact('list'));
    }
}
