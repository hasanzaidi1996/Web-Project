<?php
Session();

?>

<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ URL::asset('css/navFoot.css') }}" />


    @yield('head')
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="/index"><i>A-LIYA MOTORS</i></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span></button>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/About">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/Contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/Services">Services</a></li>
                
                @if (Session()->has('user'))
                    
                    <li class="my_nav_item">
                        <a class="dropdown-item nav-link"  href="/ViewAds">View Ads</a>
                    </li>
                    <li class="my_nav_item">
                        <a class="dropdown-item nav-link" href="/Logout">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/Login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Register">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')

</body>

</html>
