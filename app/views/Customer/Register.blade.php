@extends('layout.master')
@section('head')
  @parent
 <title>Register</title>
@stop

@section('content')
<div class = "container">
  <h1>Register</h1>
  
    <form role = "form" method ="post" action ="{{URL :: route('postRegister')}}" >
     <div class="form-group"{{ ($errors->has('Firstname')) ? 'has-error' : ''}}>
        <label for ="Firstname">First Name: </label>
        <input id ="Firstname" name="Firstname" type = "text" class ="form-control">
        @if($errors->has('Firstname'))
          {{$errors->first('Firstname')}}
        @endif
      </div>

       <div class="form-group" {{ ($errors->has('Lastname')) ? 'has-error' : ''}}>
        <label for ="Lastname">Last Name: </label>
        <input id ="Lastname" name="Lastname" type = "text" class ="form-control">
        @if($errors->has('Lastname'))
          {{$errors->first('Lastname')}}
        @endif
      </div>

       <div class="form-group" {{ ($errors->has('Address')) ? 'has-error' : ''}}>
        <label for ="Address">Address: </label>
        <input id ="Address" name="Address" type = "text" class ="form-control">
        @if($errors->has('Address'))
          {{$errors->first('Address')}}
        @endif
      </div>

      <div class="form-group" {{ ($errors->has('DOB')) ? 'has-error' : ''}}>
        <label for ="DOB">Date of Birth: </label>
        <input id ="DOB" name="DOB" type = "text" class ="form-control">
        @if($errors->has('DOB'))
          {{$errors->first('DOB')}}
        @endif
      </div>

      <div class="form-group" {{ ($errors->has('Email')) ? 'has-error' : ''}}>
        <label for ="Email">Email: </label>
        <input id ="Email" name="Email" type = "text" class ="form-control">
        @if($errors->has('Email'))
          {{$errors->first('Email')}}
        @endif
      </div>

      <div class="form-group" {{ ($errors->has('Phone')) ? 'has-error' : ''}}>
        <label for ="Phone">Phone: </label>
        <input id ="Phone" name="Phone" type = "text" class ="form-control">
        @if($errors->has('Phone'))
          {{$errors->first('Phone')}}
        @endif
      </div>

      <div class="form-group" {{ ($errors->has('Password')) ? 'has-error' : ''}}>
        <label for ="Password1">Password: </label>
        <input id ="Password1" name="Password1" type = "password" class ="form-control">
        @if($errors->has('Password'))
          {{$errors->first('Password')}}
        @endif
      </div>

      <div class="form-group" {{ ($errors->has('Password2')) ? 'has-error' : ''}}>
        <label for ="Password2">Confirm Password: </label>
        <input id ="Password2" name="Password2" type = "password" class ="form-control">
        @if($errors->has('Password2'))
          {{$errors->first('Password2')}}
        @endif
        
      {{Form :: token()}}
      <div class="form-group">
        <input type="submit" value = "Register" class="btn btn-default">
      </div>

    </form>
  </div>


  
@stop

<!--comment-->