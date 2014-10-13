@extends('layout.master')
@section('head')
  @parent
 <title>Home</title>
@stop

@section('content')
<div class = "container">
  <h1>Register</h1>
  
    <form role = "form" method ="post" >
      <div class="form-group">
        <label for ="Firstname">First Name: </label>
        <input id ="Firstname" name="Firstname" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Firstname">First Name: </label>
        <input id ="Firstname" name="Firstname" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Lastname">Last Name: </label>
        <input id ="Lastname" name="Lastname" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Address">Address: </label>
        <input id ="Address" name="Address" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="DOB">Date of Birth: </label>
        <input id ="DOB" name="DOB" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Email">Email: </label>
        <input id ="Email" name="Email" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Phone">Phone: </label>
        <input id ="Phone" name="Phone" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Password1">Password: </label>
        <input id ="Password1" name="Password1" type = "text" class ="form-control">
      </div>

      <div class="form-group">
        <label for ="Password2">Confirm Password: </label>
        <input id ="Password2" name="Password2" type = "text" class ="form-control">
      </div>
      {{Form :: token()}}
      <div class="form-group">
        <input type="submit" value = "Register" class="btn btn-default">
      </div>

    </form>
  </div>

  
@stop

