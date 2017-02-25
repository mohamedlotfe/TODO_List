@extends('layout')
@section('content')
  <h1>add your own task </h1>
<form action="/add" method="post">
 {{csrf_field()}}

   <input type="text" class="form-control" name="content" placeholder="Enter ur task description ">
    </br>
  <button type="submit" class="btn btn-info">ADD New</button>
</form>
  @stop