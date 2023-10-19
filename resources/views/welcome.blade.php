<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{URL::asset('/img/logo.png')}}" type="image/x-icon">nk

         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Employee System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>




        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-secondary-subtle">
        {{--  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

        {{-- Navbar --}}
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light-subtle px-3">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand" href="#">{{ config('app.name', 'Employee System') }}</a>

                    <!-- Responsive Toggle Button (Hamburger Menu) -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigation Links (For Collapsible Menu) -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="flex-grow-1"></div>

                        <!-- Navigation Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>

                        <!-- Spacer to Push Links to the Center -->
                        <div class="flex-grow-1"></div>

                        {{-- Auth routes --}}
                        @if (Route::has('login'))
                            <div class="">
                            @auth
                                    <a href="{{ url('/home') }}" class="">Home</a>
                            </div>

                        <!-- Right-aligned Links (Login and Register) -->
                        @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link px-3 bg-primary-subtle rounded" href="{{ route('login') }}">Login</a>
                            </li>
                            &nbsp;
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link border border-secondary rounded" href="{{ route('register') }}">Register</a>
                            </li>
                            @endif
                        </ul>
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </header>

        <!-- Navbar -->


<section class="hero vh-100 d-flex row justify-content-center align-items-center text-center">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 d-flex flex-column  justify-content-center align-items-center ">
                    <h1 class="display-4">Welcome to Empoyee Portal</h1>
                    <p class="lead">You are awesome working here!</p>
                    <div>
                        <a href="{{ route('login') }}" class="btn bg-primary-subtle ">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-secondary ">Register</a>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="{{URL::asset('/img/hero-img.png')}}" alt="profile Pic" class="img-fluid">
                </div>
            </div>
        </div>
    </section>




{{-- script for bootstrap 5.2.3 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
