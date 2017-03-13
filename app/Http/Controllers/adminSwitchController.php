<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rio;

class adminSwitchController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
    {
      $a = Rio::all();
      // dd($a);
      return view('switchDir.switchhome',compact('a'));
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

  public function edit($id)
  {
    $data = Rio::find($id);
    // return view('switchhomeEdit',compact($data));
        return view('switchDir/switchhomeEdit',compact('data'));

  }

  public function update(Request $request,$id)
  {
    $update = Rio::find($id);
    $update->update($request->all());

    // $update->type = $request->type;
    // $update->lokasi = $request->lokasi;
    // $update->link = $request->link;
    // $update->nama = $request->nama;
    // $update->deskripsi = $request->deskripsi;
    //
    // $update->save;
    return redirect()->back();

  }

  public function destroy($id)
  {
    Rio::find($id)->delete();
    return redirect()->back();

  }
}
