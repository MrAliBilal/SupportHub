<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Hub</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .navbar {
            background-color: #F0F8FF; /* Set the background color */
        }
        .navbar-brand {
            font-size: 24px; /* Adjust the font size as needed */
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            font-weight: bold;
            position: relative;
            margin-right: 15px; /* Adjust the spacing between links */
        }
        .navbar-nav .nav-link::before {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #343a40; /* Color of the underline */
            transition: width 0.3s ease;
        }
        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link:focus::before {
            width: 100%;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light border-b-2 border-dark">
            <div class="container">
                <a class="navbar-brand" href="/">SupportHub</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    @auth

                    @if (auth()->user()->account_type === 'CareSeeker')

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#Testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/careseeker/postjob">Post a Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/careseeker/manage-job">Manage Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/careseeker/worker-list">Find Worker</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/chat">Chat</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegister" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="user-name">{{ auth()->user()->first_name }}</span>
                                <span class="mr-2">{{ auth()->user()->last_name }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownRegister">
                                <form class="dropdown-item" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" > <i class="fas fa-door-closed"></i> Logout </button>
                                </form>
                            </div>
                        </li>
                    </ul>

                    @else

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#Testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/supportworker/joblist">Jobs Lists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/supportworker/profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/chat">Chat</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegister" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="user-name ">{{ auth()->user()->first_name }}</span>
                                <span class="mr-2 text-turquoise">{{ auth()->user()->last_name }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownRegister">
                                <form class="dropdown-item" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" > <i class="fas fa-door-closed"></i> Logout </button>
                                </form>
                            </div>
                        </li>
                    </ul>

                    @endif

                @else

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#Testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Post a Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Find Worker</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegister" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownRegister">
                            <a class="dropdown-item" href="/register/careseeker">Register as Care Seeker</a>
                            <a class="dropdown-item" href="/register/supportworker">Register as Support Worker</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>

                @endauth


                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <p><i class="fab fa-github"></i> <a href="https://github.com/AliBilal-1/" >AliBilal-1</a> </p>
        </div>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


























    {{-- <nav class="bg-laravel p-4">
        <div class="container mx-auto flex flex-col md:flex-row md:justify-between items-center">
            <a href="/" class="text-white font-bold text-lg mb-2 md:mb-0">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24" />
            </a>

            <ul class="flex flex-col md:flex-row space-y-4 md:space-x-6 text-lg md:items-center">

                <ul class="flex space-x-6 text-lg">
                    @auth

                        @if (auth()->user()->account_type === 'CareSeeker')

                        @else

                        @endif

                    @else

                    @endauth
                </ul>
        </div>
    </nav> --}}
