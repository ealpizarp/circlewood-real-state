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

    <title>Circlewood Real State</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center">
        <a href="/"><img class="w-24 p-3" src={{ asset('images/app-logo.png') }} alt=""
                class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold uppercase text-zinc-600 hover:text-cyan-600 transition duration-300">
                    Welcome {{auth()->user()->name}}
                </span>
            </li>
            <li>
                <form action="/logout" class="inline text-zinc-600 hover:text-cyan-600 transition duration-300" method="POST">
                @csrf
                <button class="hover:text-cyan-600 transition duration-300" type="submit">
                    <i class="fa-solid fa-door-closed "></i> Logout
                </button>
                </form>
            </li>
            @else
            <li>
                <a href="/register" class=" text-zinc-600 hover:text-cyan-600 transition duration-300"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="text-zinc-600 hover:text-cyan-600 transition duration-300"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
            <li> 
                <a href="/contact" class="text-zinc-600 hover:text-cyan-600 transition duration-300"><i class="fa-solid fa-envelope"></i> Contact Us</a>
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
