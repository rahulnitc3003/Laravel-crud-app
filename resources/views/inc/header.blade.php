<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project management tools</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{ url('js/jquery-3.4.1.js') }}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><b>Home</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('create') }}">New Project</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
