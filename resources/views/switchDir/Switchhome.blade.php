@extends('layouts.appswitch')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-3">Sistem Informasi Infrastuktur Jaringan Udayana(SINJU) </h1>
    <p class="lead">Selamat Datang {{auth::user()->name}}</p>
    <hr class="m-y-md">
    <p>Create Info</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">add</a>
    </p>
  </div>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Nama switch</th>
        <th>tipe </th>
        <th>Lokasi </th>
        <!-- <th>link</th> -->
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>

         @foreach ($a as $data)
        <tr>
          <td><a href="{{url($data->link)}}">{{$data->nama}}</a> </td>
          <td>{{$data->type}}</td>
          <td>{{$data->lokasi}}</td>
          <!-- <td>
            <span class="glyphicon glyphicon-search" aria-hidden="true">wow</span>
            <a href="Http://localhost" class="btn btn-primary active|disabled" role="button">Link</a>
            <button type="button" class="btn btn-primary btn-lg btn-block">LINK</button>
          </td> -->


          <td>
            <a class="btn btn-primary btn-lg btn-block" href="{{url('/home/switch/'.$data->id.'/edit')}}" role="button">edit</a>
            <!-- <a href="{{url('/home/switch/'.$data->id.'/edit')}}">edit</a> -->
          </td>

          <td>
          <form action="{{url('/home/switch/'.$data->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger btn-lg btn-block">DELETE</button>
          </form>
          </td>

      </tr>
         @endforeach;

    </tbody>
  </table>
</div>
@endsection
