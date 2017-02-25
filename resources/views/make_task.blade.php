@extends('layout')
@section('content')
<table class="table table-striped table-responsive">
    <tr>
        <td class="danger">ID</td>
        <td class="success">description</td>
        <td class="info">Edit</td>
        <td  class="warning">Delete</td>

    </tr>
@foreach($tasks as $mytask)
        <tr>
            <td > {{$mytask->id}}</td>

            <td> {{$mytask->content}}</td>

            <td> <a href="edit/{{$mytask->id}}">Edit</a> </td>

            <td><a href="delete/{{$mytask->id}}">Delete</a> </td>

        </tr>
@endforeach
</table>
    @stop