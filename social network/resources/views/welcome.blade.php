@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')


   @include('includes.message-block')

<!-- Sign up form-->
<div class="row">
<div class="col-md-6">
<h3>Sign Up</h3>
 <form action="{{ route('signup')}}" method="post">
    <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
        <label for="email">
                 Your E-mail:
         </label>
<!-- autofills form, if fields have been filled previously: value-reuquest-old --> <!--default bootstrap class which hihlights error field  -->
        <input  class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
    </div>
    <div class="form-group {{$errors->has('full_name') ? 'has-error':''}}">
        <label for="full_name">
                 Full Name:
         </label>
        <input  class="form-control"   type="text" name="full_name" id="full_name" value="{{Request::old('full_name')}}">
        </div>

        <div class="form-group {{$errors->has('password') ? 'has-error':''}}">
        <label for="password">
                 Password:
         </label>
        <input  class="form-control"   type="password" name="password" id="password">
    </div>

    <button type="Submit" class="btn btn-primary">Submit</button>
    <!-- protects against session hijacking-->
    <input type="hidden" name="_token" value="{{Session::token()}}">
</form>
</div>


<!-- Sign in form-->
<div class="col-md-6">
<h3>Sign In</h3>
 <form action="{{ route('signin')}}" method="post">
    <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
        <label for="email">
                 Your E-mail:
         </label>
        <input  class="form-control"   type="text" name="email" id="email">
    </div>
    
       
        <div class="form-group {{$errors->has('password') ? 'has-error':''}} ">
        <label for="password">
                 Password:
         </label>
        <input  class="form-control"   type="password" name="password" id="password">
    </div>

    <button type="Submit" class="btn btn-primary">Submit</button>

    <!--to prevent session token error-->
     <input type="hidden" name="_token" value="{{Session::token()}}">

</form>
</div>

</div>

@endsection