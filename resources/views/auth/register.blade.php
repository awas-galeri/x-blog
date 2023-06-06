<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Xtra Blog | Registration</title>
    <link rel="icon" type="image/x-icon" href="/loggo.ico" />
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            {{-- <div class="login-card-logo">
                <img src="{{ asset('asset/logo.png') }}" alt="logo">
            </div> --}}
            <div class="login-card-header">
                @if (session('message'))
                    <div class="alert alert-success" style="color: green">
                        {{ session('message') }}
                    </div>
                @endif
                <h1>Sign Up</h1>
                <div>Please regist to log in</div>
            </div>
            <form class="login-card-form" action="{{ route('storeRegist') }}" method="post">
                @csrf
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input name="email" type="email" placeholder="Enter Email" id="emailForm" autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input name="username" type="text" placeholder="Enter Username" id="userName" required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input name="password" type="password" placeholder="Enter Password" id="passwordForm" required>
                </div>
                <div class="form-item-other">
                    {{-- <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox">
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div> --}}
                    {{-- <a href="#">I forgot my password!</a> --}}
                </div>
                <button type="submit">Sign Up</button>
            </form>
            <div class="login-card-footer">
                Already have an account? <a href="{{ route('login') }}">Please log in.</a>
            </div>
        </div>
        {{-- <div class="login-card-social">
            <div>Other Sign-In Options</div>
            <div class="login-card-social-btns">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                    </svg>
                </a>
            </div>
        </div> --}}
    </div>

</body>

</html>
