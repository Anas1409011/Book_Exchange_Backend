@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
	@include('navbar')
@stop

@section('content')
	<?php $b= Session::get('admin_name'); echo "Welcome ".$b. " ,";?>
	<br>
    <p>Welcome to this beautiful admin panel.</p>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
