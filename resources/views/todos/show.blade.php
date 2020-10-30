
@extends('layout.app')
@section('title', 'Read More')

@section('content')
<div class="container distance">
    <div class="jumbotron mt-3 bg-light">
        <h1 class="display-4">{{$todolist->todo}}</h1>
        <span class="lead ">Slug: {{$todolist->slug}}</span>
        <hr class="my-4">
        <p>{{$todolist->description}}</p>
        <div class="d-flex custom justify-content-start">
        <a href="/todolist/{{$todolist->id}}/edit" class="btn btn-warning text-white update ">Update</a>
        <form action="/todolist/{{$todolist->id}}" method="post">
         @csrf
         @method("DELETE")
         <button class="btn btn-danger ml-2 delete">Delete</button>
         </form>
        </div>
      </div>
<p></p>
<p></p>
</div>

@endsection
