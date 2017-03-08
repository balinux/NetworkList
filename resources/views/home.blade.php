@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-3">Sistem Informasi Infrastuktur Jaringan Udayana </h1>
    <p class="lead">Selamat Datang {{auth::user()->name}}</p>
    <hr class="m-y-md">

    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{url('/home/switch')}}" role="button">List Perangkat</a>
    </p>
  </div>
</div>
@endsection
