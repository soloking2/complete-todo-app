        @extends('layouts.app')

        @section('content')

        <div class="card card-default px-3">
            <div class="card-header">
            <h1>Todo List</h1>
            </div>
            <div class="card-body">
                <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item">
                    {{$todo->name}}
                    @if(!$todo->completed)
                    <a class="btn btn-warning btn-sm float-right text-white" href="{{route('todos.complete', $todo->id)}}">Complete</a>
                    @endif
                    <a class="btn btn-primary btn-sm float-right text-white mr-2" href="{{route('todos.show', $todo->id)}}">View</a>
                    </li>
                @endforeach
                </ul>

            </div>
        </div>

        @endsection



