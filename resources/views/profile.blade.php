
@extends('adminlte::page')

@section('titile', 'Dashnoard') {{--Ini untuk title--}}

@section('content_header')      {{--Ini untuk header--}}

    <h1>Dashboard</h1>

@stop 

@section('content')     {{--Ini untuk header--}}
    <p>Welcome to this beautiful admin panel Yo.</p>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop 

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b>1.0.0
    </div>
    <strong>Copyright &copy; {{date('Y')}} <a href="http://ftunsur.ac.id/" target="blank">Fakultas Teknik, Universitas Suryakancana</a>.</strong>All rights reserved.
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!');</script>
@stop