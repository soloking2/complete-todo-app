@extends('layouts.app')

@section('content')

<div class="card card-default px-3">
    <div class="card-header">
    <h1>{{$todo->name}}</h1>
    </div>
    <div class="card-body">
       <p>{{$todo->description}}</p>

    </div>

</div>
<div class="my-3">
<a href="{{route('todos.edit', $todo->id)}}" class="btn btn-info">Edit</a>
<a href="#"
          onclick="
            var result = confirm('Are you sure you want to delete this todo?');
            if(result){
              event.preventDefault();
              document.getElementById('delete-form').submit();
            };
          "
          class="btn btn-danger">
            Delete</a>
            <form id="delete-form" method="POST" action="{{ route('todos.destroy',[$todo->id]) }}" style="display:none;">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
            </form>"
</div>


@endsection
