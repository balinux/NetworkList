@extends('layouts.appIndex')

@section('content')
<div class="container" style="margin-top:50px">

  <div class="container">
  	<div class="row">

          <div class="col-md-4">
          <h2>Maps</h2>
            <div class="col-md-3 col-lg-3 " align="center">


              </div>
          <!-- <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div> -->

          </div>
          <div class="col-md-8">
                  <div class=" col-md-9 col-lg-9 ">
                    <h2>Detail</h2>
                                  <table class="table table-user-information">
                                      <tbody>
                                          <tr>
                                              <td><b>nama</b></td>
                                              <td>{{$detail->nama}}</td>
                                          </tr>
                                          <tr>
                                              <td><b>type</b></td>
                                              <td>{{$detail->type}}</td>
                                          </tr>
                                          <tr>
                                              <td><b>lokasi</b></td>
                                              <td>{{$detail->lokasi}}</td>
                                          </tr>

                                              <tr>
                                                  <td><b>link</b></td>
                                                  <td>{{$detail->link}}</td>
                                              </tr>
                                              <tr>
                                                  <td><b>status</b></td>
                                                  <td>{{$detail->status}}</td>
                                              </tr>
                                              <tr>
                                                  <td><b>noserial</b></td>
                                                  <td>{{$detail->noserial}}</td>
                                              </tr>

                                              <td><b>mac Addres</b> </td>
                                              <td>{{$detail->mac}}</td>

                                              <tr>
                                                <td><b>deskripsi</b></td>
                                                <td>{{$detail->deskripsi}}</td>
                                              </tr>

                                              <tr>
                                                <td>
                                                  <a class="btn btn-primary btn-lg btn-block" href="{{url('/home/switch/'.$detail->id.'/edit')}}" role="button">edit</a>
                                                  </td>

                                                <td>
                                                <form action="{{url('/home/switch/'.$detail->id)}}" method="POST">
                                                  {{csrf_field()}}
                                                  <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-lg btn-block">DELETE</button>
                                                </form>
                                                </td>
                                              </tr>



                                      </tbody>
                                  </table>
          </div>
  	</div>
  </div>
</div>
<div id="map"></div>

@endsection
