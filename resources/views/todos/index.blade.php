@extends('layout.app')
@section('title', 'Home')

@section('content')

    <div class="container">
        @if (session('status'))
        <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
            <strong>Todolist App!</strong> {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="">
            <a href="/todolist/create" class="btn btn-primary mt-3">Add New</a>
        </div>
        @foreach ($todolists as $todos)
            <div class="row">
                <div class="col">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-6 col-sm-12 col-m-6">
                                <div>
                                    <h3>{{ $todos->todo }}</h3>
                                </div>
                                <div>
                                    <p>{{substr($todos->description, 0, 100) . '...'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-m-6">
                            <div class="d-flex custom justify-content-end">
                                <a href="/todolist/{{$todos->slug}}/" class="btn btn-info text-white mr-2">Read More</a>
                            </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <nav aria-label="Todolist paginate">
        <div class="mt-3 mb-5">
        <ul class="pagination justify-content-center">
            {{$todolists->links()}}
        </ul>
        </div>
    </nav>

@endsection

