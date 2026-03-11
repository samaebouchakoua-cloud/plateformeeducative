@extends('layouts.app')

@section('title','Accueil')

@section('content')
<div class="text-center">
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur la plateforme</h1>
    <p class="mb-6">Accédez à des challenges pédagogiques, suivez votre progression et collaborez avec vos enseignants.</p>
    <a href="{{ url('/login') }}" class="bg-blue-500 text-white px-6 py-3 rounded">Se connecter</a>
</div>
@endsection