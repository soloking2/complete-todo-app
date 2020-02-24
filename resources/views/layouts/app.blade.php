<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Todo App</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
        <a href="/" class="navbar-brand">Todo</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSelected" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSelected">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="{{route('todos.index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                <a href="{{route('todos.create')}}" class="nav-link">
                Create Todo</a></li>
            </ul>
        </div>
        </div>
    </nav>
<main class="py-4">

    <div class="container">
        <div class="row">
        <div class="col-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            @yield('content')
        </div>

        </div>
    </div>

</main>
</body>
</html>
