@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
    Create Todo
    </div>
    <div class="card-body">
    @if($errors->any())

        <div class="alert alert-danger">
            <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item">
                    {{$error}}
                </li>
            @endforeach
        </ul>
        </div>
    @endif
    <form method="post" action="{{route('todos.store')}}">
    @csrf
    <div class="form-group">
    <label for="name">Name of Todo</label>
    <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <button class="btn btn-primary">Submit</button>
    </div>

</form>
    </div>
</div>

@endsection
