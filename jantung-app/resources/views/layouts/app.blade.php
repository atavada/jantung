<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
            color: #F2F2F2;
            background-color: #303641;
        }

        #container-login {
            background-color: #1D1F20;
            position: relative;
            top: 20%;
            margin: auto;
            width: 340px;
            height: 445px;
            border-radius: 0.35em;
            box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        #container-register {
            background-color: #1D1F20;
            position: relative;
            top: 20%;
            margin: auto;
            width: 340px;
            height: 480px;
            border-radius: 0.35em;
            box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        #title {
            position: relative;
            background-color: #1A1C1D;
            width: 100%;
            padding: 20px 0px;
            border-radius: 0.35em;
            font-size: 22px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .lock {
            position: relative;
            top: 2px;
        }

        .input {
            margin: auto;
            width: 240px;
            border-radius: 4px;
            background-color: #373b3d;
            padding: 8px 0px;
            margin-top: 15px;
        }

        .input-addon {
            float: left;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 4px 8px;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        input[type=checkbox] {
            cursor: pointer;
        }

        input[type=text] {
            color: #949494;
            margin: 0;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 6px 0px;
            border-radius: 3px;
        }

        input[type=text]:focus {
            border: 1px solid #373b3d;
        }

        input[type=password] {
            color: #949494;
            margin: 0;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 6px 0px;
            border-radius: 3px;
        }

        input[type=password]:focus {
            border: 1px solid #373b3d;
        }

        input[type=email] {
            color: #949494;
            margin: 0;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 6px 0px;
            border-radius: 3px;
        }

        input[type=email]:focus {
            border: 1px solid #373b3d;
        }

        .forgot-password {
            position: relative;
            bottom: 0%;
        }

        .forgot-password a:link {
            color: #C1C3C6;
            text-decoration: none;
        }

        .forgot-password a:visited {
            color: #C1C3C6;
            text-decoration: none;
        }

        .forgot-password a:hover {
            color: #FFF;
            transition: color 1s;
        }

        .privacy {
            margin-top: 5px;
            position: relative;
            font-size: 12px;
            bottom: 0%;
        }

        .privacy a:link {
            color: #949494;
            text-decoration: none;
        }

        .privacy a:visited {
            color: #949494;
            text-decoration: none;
        }

        .privacy a:hover {
            color: #C1C3C6;
            transition: color 1s;
        }

        *:focus {
            outline: none;
        }

        .remember-me {
            margin: 10px 0;
        }

        input[type=submit] {
            padding: 6px 25px;
            background: #373E4A;
            color: #C1C3C6;
            font-weight: bold;
            border: 0 none;
            cursor: pointer;
            border-radius: 3px;
        }

        .register {
            margin: auto;
            padding: 16px 0;
            text-align: center;
            margin-top: 40px;
            width: 85%;
            border-top: 1px solid #C1C3C6;
        }

        .clearfix {
            clear: both;
        }

        #register-link {
            margin-top: 10px;
            padding: 6px 25px;
            background: #373E4A;
            color: #C1C3C6;
            font-weight: bold;
            border: 0 none;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')
    </div>
</body>
</html>
