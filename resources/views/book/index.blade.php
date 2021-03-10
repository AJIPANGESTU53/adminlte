
@extends('adminlte::page')

@section('titile', 'Dashnoard') {{--Ini untuk title--}}

@section('content_header')      {{--Ini untuk header--}}

    <h1>Dashboard</h1>

@stop 

@section('content')     {{--Ini untuk header--}}
  
    <h1>hello</h1>
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