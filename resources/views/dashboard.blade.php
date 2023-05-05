<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Dashboard Page</title>
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <h2>Dashboard</h2>
            <h4>Selamat datang {{ auth()->user()->username }}</h4>
            <br>
            <a href="{{ route('logout') }}"><b>Logout</b></a>
        </div>
    </div>

</body>

</html>
