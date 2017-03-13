@extends('layouts.appswitch')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-3">Selamat Datang {{auth::user()->name}}</h1>
    <p class="lead">Sistem Informasi Infrastuktur Jaringan Udayana(SINJU)</p>
    <hr class="m-y-md">
    <p>Create Info</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">add</a>
    </p>
  </div>
<div class="container">

<!--  input-->
    <form class="" action="{{url('home/switch')}}" method="post">
      {{csrf_field()}}

<!-- <input type="text" name="nama" > -->

<!-- <input type="text" name="type" > -->

<!-- <input type="text" name="lokasi" > -->

<!-- <input type="text" name="link" > -->

<!-- <input type="text" name="deskripsi" > -->

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">nama switch</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="nama" placeholder="Contoh : Switch fakultas Teknik">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">type</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="type" placeholder="Contoh : Mikrotik">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">lokasi</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="lokasi" placeholder="Contoh : Dekan Fakultas terknik lantai 2">
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">link</label>
        <input type="text" class="form-control form-control-success" id="inputSuccess1" name="link" placeholder="Contoh : Http://172.16.240.11">
      </div>

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">status</label>
          <input type="text" class="form-control form-control-success" id="inputSuccess1" name="status" placeholder="Contoh : Http://172.16.240.11">
        </div>

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">noserial</label>
          <input type="text" class="form-control form-control-success" id="inputSuccess1" name="noserial" placeholder="Contoh : Http://172.16.240.11">
        </div>

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">mac</label>
          <input type="text" class="form-control form-control-success" id="inputSuccess1" name="mac" placeholder="Contoh : Http://172.16.240.11">
        </div>

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">latitude</label>
          <input type="text" class="form-control form-control-success" id="inputSuccess1" name="latitude" placeholder="Contoh : Http://172.16.240.11">
        </div>

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">longitude</label>
          <input type="text" class="form-control form-control-success" id="inputSuccess1" name="longitude" placeholder="Contoh : Http://172.16.240.11">
        </div>
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">deskripsi</label> <br>
        <textarea name="deskripsi" rows="8" cols="80"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection
