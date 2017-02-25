@extends('layout')
@section('content')

<form action="/delete" method="post">
    {{csrf_field()}}

       <input type="text" name="id" placeholder="Enter ur task description ">
    </br>
    <input type="submit" value="delete task">
</form>
    @stop