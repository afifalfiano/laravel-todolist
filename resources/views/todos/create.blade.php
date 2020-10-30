
@extends('layout.app')
@section('title', 'Add Todos')

@section('content')

<div class="container distance">
    <div class="row">
        <div class="col-lg-12 col-m-12 col-sm-12">
        <h3 class="h3 mt-3">Add New Todos:</h3>
        <form action="/todolist" method="post">
            @csrf
            <div class="form-group">
              <label for="todo">Todo</label>
              <input type="text" class="form-control" name="todo" id="todo" aria-describedby="todo" placeholder="Add new todo...">
            </div>
            @error('todo')
            <div class="mt-2 alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="description" class="form-control" id="description" rows="6" placeholder="Add new description..."></textarea>
            </div>

            @error('description')
            <div class="mt-2 alert alert-danger"></div>
            @enderror
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>

            </form>
        </div>
    </div>
</div>


@endsection
