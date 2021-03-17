@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if ($user->roles_id == 1)
        Anda login sebagai Admin
    @else
        Anda login sebagai User
    @endif
@stop
@section('footer')
   <div class="float-right d-none d-sm-block">
       <b>Version</b>2.0.0
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
