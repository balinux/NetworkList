@extends('layouts.appswitch')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-3">Selamat Datang </h1>
    <p class="lead">Sistem informasi udayana Network</p>
    <hr class="m-y-md">
    <p>Create Info</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">add</a>
    </p>
  </div>
<div class="container">

<!--  input-->
    <form class="" action="{{url('/home/switch/'.$data->id)}}" method="POST">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH">

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">nama switch</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="nama" value="{{$data->nama}}" placeholder="Contoh : Switch fakultas Teknik">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">type</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="type" value="{{$data->type}}" placeholder="Contoh : Mikrotik">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">lokasi</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="lokasi" value="{{$data->lokasi}}" placeholder="Contoh : Dekan Fakultas terknik lantai 2">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">link</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="link" value="{{$data->link}}" placeholder="Contoh : Http://172.16.240.11">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">deskripsi</label> <br>
        <textarea name="deskripsi" rows="8" cols="80">{{$data->nama}}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection
