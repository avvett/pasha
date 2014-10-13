@extends('layout.master')
@section('head')
	@parent
 <title>Home</title>
@stop

@section('content')
  this is home page
  @if(Session::has('success'))
  	  <div class ="alert alert-success">{{session::get('success')}}</div>
  @elseif (Session::has('fail'))
  	  <div class ="alert alert-danger">{{session::get('fail')}}</div>
  @endif
@stop