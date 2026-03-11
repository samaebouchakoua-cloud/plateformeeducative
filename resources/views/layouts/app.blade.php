<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Plateforme')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold">Plateforme</a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ url('/') }}" class="hover:underline">Accueil</a></li>
                    <li><a href="{{ url('/login') }}" class="hover:underline">Connexion</a></li>
                    <li><a href="{{ url('/register') }}" class="hover:underline">Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
    <footer class="bg-white border-t mt-12">
        <div class="container mx-auto px-4 py-4 text-center text-sm text-gray-600">
            &copy; {{ date('Y') }} Plateforme éducative
        </div>
    </footer>
</body>
</html>