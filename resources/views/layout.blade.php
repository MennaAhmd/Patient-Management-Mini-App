<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Patient System')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">MinPatient</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('create') }}">Add Patient</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
