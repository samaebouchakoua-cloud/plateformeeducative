@extends('layouts.app')

@section('title','Connexion')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl mb-4">Connexion</h1>
    <form action="#" method="POST">
        <div class="mb-4">
            <label for="email" class="block mb-1">Email / Identifiant</label>
            <input type="text" id="email" name="email" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-1">Mot de passe</label>
            <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="flex justify-between items-center mb-4">
            <a href="{{ url('/password/reset') }}" class="text-sm text-blue-500 hover:underline">Mot de passe oublié ?</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Connexion</button>
        </div>
        <p class="text-sm">Pas encore de compte ? <a href="{{ url('/register') }}" class="text-blue-500 hover:underline">Inscription</a></p>
    </form>
</div>
@endsection