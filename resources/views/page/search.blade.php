@extends('layouts.appIndex')

@section('content')
<div class="container" style="margin-top:50px">

<div class="panel panel-default">
<div style="margin:7px">
        <div class="col-xs-6">
        <div class="btn-group">
        <!-- <a class="btn btn-default"><span>New</span></a>
        <a class="btn btn-default"><span>Edit</span></a>
        <a class="btn btn-default"><span>Delete</span></a> -->
        </div>
      </div>
        <div class="col-xs-6 pull-right form-group">
          <form class="" action="{{url('search')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="search" class="form-control" style="border-radius:0px" placeholder="Search">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
                    </div>
        </div>
  <div class="panel-body" style="padding:0px">
  <table class="table table-striped table-bordered" style="margin:0px">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama switch</th>
        <th>Tipe switch</th>
        <th>Lokasi</th>
        <th>Link</th>
        <th style="width:100px">Actions</th>
        </tr>
  </thead>

<tbody>
<td class="">{{$list->id}}</td>
<td class="">{{$list->nama}}</td>
<td class="">{{$list->type}}</td>
<td class="">{{$list->lokasi}}</td>
<td class="">{{$list->link}}</td>

@if(Auth::Check())
<td>
    <button type="button" class="btn btn-xs btn-default">
      <a href="{{url('/home/switch/'.$list->id.'/edit')}}"><span class="glyphicon glyphicon-pencil"></span></a>
  </button>

  <form action="{{url('/home/switch/'.$list->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
  <button type="submit" class="remove-news btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button>
  </form>
<!--
  <button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
      <span class="glyphicon glyphicon-trash"></span>
  </button> -->
  <!--
  <button type="button" class="enabledisable-news btn btn-xs btn-default">
    <span class="glyphicon glyphicon-ok"></span>
  </button> -->
</td>

@else <td>none</td>

@endif
  </tr>
</tbody>


</table>
  </div>
  <div class="panel-footer">
      <!-- <div class="col-xs-3"><div cl  ass="dataTables_info" id="example_info">Showing 51 - 60 of 100 total results</div></div> -->
    <div class="col-xs-6">
<div class="dataTables_paginate paging_bootstrap">
<ul class="pagination pagination-sm" style="margin:0 !important"><li class="prev disabled"><a href="#">← Previous</a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li class="next disabled"><a href="#">Next → </a></li></ul>
</div>
</div>
<div class="btn-group">
  <!-- <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
    10 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" style="min-width: 0px ">
    <li><a href="#">5</a></li>
    <li class="active"><a href="#">10</a></li>
    <li><a href="#">15</a></li>
    <li><a href="#">15</a></li>
  </ul>
  <span>items per page </span> -->
</div>
  </div>
</div>

@endsection
