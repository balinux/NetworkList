<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Info windows</title>
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;

        margin-left: 11%;
        margin-right: 10%;

      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}">UNUD</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form> -->
          @if(Auth::Check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <a class="navbar-form navbar-right" href="{{route('logout')}}"><button type="submit" class="btn btn-success">Logout</button></a>
            </form>

            <a class="navbar-form navbar-right" href="{{url('/home/switch/create')}}"><button type="submit" class="btn btn-success">add</button></a>

          @else
          <a class="navbar-form navbar-right" href="{{url('/home')}}"><button type="button" class="btn btn-success">Login</button></a>

        @endif

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Sistem Informasi Infrastuktur Jaringan Udayana (SINJU)</h1>
        @if(Auth::Check())
        <p>Hello,Selamat Datang {{Auth::user()->name}}</p>
        @else
        <p>Hello,Selamat Datang Pengunjung</p>
        @endif
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Nothing &raquo;</a></p> -->
      </div>
    </div>

    <div class="container">
      <div class="row">


            <div class="col-md-12">
                    <div class=" col-md-12 col-lg-12 ">
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

    <script>

// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.

function initMap() {
  var uluru = {lat: {{$detail->latitude}}, lng: {{$detail->longitude}}};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: uluru
  });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">{{$detail->nama}}</h1>'+
      '<div id="bodyContent">'+
      '<h4>status : {{$detail->status}}<h4>'+
      '<h4>lokasi : {{$detail->lokasi}}</h4>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Uluru (Ayers Rock)'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOSppOtpKmdbD0HocTcj4Eqenjjr7vB-k&callback=initMap"></script>
  </body>
</html>
