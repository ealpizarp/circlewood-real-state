<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/animate.css') }}">  
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/css/style.css') }}">
    <title>Real State App</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24 p-3" src={{ asset('images/app-logo.png') }} alt=""
                class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold uppercase">
                    Welcome {{auth()->user()->name}}
                </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                    Manage Listings</a>
            </li>
            <li>
                <form action="/logout" class="inline" method="POST">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
                </form>
            </li>
            @else

            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
            @endauth
        </ul>
    </nav>

    <main>
        @yield('content')
        
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-cyan-700 text-white h-20 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
    </footer>
    <x-flash-message></x-flash-message>


</body>

</html>
