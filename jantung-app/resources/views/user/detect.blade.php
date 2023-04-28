@extends('layouts.master')

@section('content')
<!-- Styles -->
<style>
    html,

    h2 {
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        color: #000000;
    }

    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        /* right: 10px; */
        top: 560px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .wrapper{
        display: flex;
    }

    .border {
        border: 1px solid #2e2e30;
        padding: 10px;
        margin: 10px;
    }

    .wrapper .static-txt{
        /* color: wheat; */
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Nerko One';;
        transform: translate(-50%, -50%);
        /* box-shadow: 0px 0px 10px rgba(0,0,0,0.5); */
        color: transparent;
        -webkit-text-stroke: 2px #2e2e30;
        text-transform: uppercase ;
        font-size: 70px;
    }
    .wrapper .static-txt:before {
        content: attr(data-text);
        position: absolute;
        top: 0%;
        left: 0% ;
        width: 0%;
        height: 100%;
        color: #2e2e30;
        -webkit-text-stroke: 1px #2e2e30;
        border-right: 0px solid black;
        overflow: hidden;
        animation: animate 15s linear infinite;
    }
    @keyframes animate{
    0%
    {
        width: 0;
    }
    70%,90%
    {
        width: 100%;
    }
    }

    #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 1920px;
    height: 1080px;
    }
</style>
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('img/bg.mp4') }}" type="video/mp4">
        </video>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links border">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="wrapper">
                    <div class="static-txt" data-text="ADH&nbsp;|&nbsp;HEART&nbsp;DIASASE">ADH&nbsp;|&nbsp;HEART&nbsp;DIASASE</div>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/atavada/jantung.git">GitHub</a>
                </div>
            </div>
        </div>
@stop
