
@extends('layout')
@section('content')
<form action="/edit/{{$task->id}}" method="post">
    {{csrf_field()}}
    <input type="text"class="form-control"  name="id" value="{{$task->id}}" >
<br>
    <input type="text" class="form-control" name="content" value="{{$task->content}}" >

    </br>
    <input  type="submit" value="edit task "class="btn btn-info">
</form>
    @stop