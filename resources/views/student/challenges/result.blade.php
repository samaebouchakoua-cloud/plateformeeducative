@extends('layouts.app')

@section('title','Résultat challenge')

@section('content')
<div class="bg-white p-6 rounded shadow text-center">
    <h2 class="text-2xl mb-4">Challenge terminé</h2>
    <p>Score obtenu : <strong>80</strong></p>
    <p>Bonnes réponses : <strong>8/10</strong></p>
    <p>Classement : <strong>5ème</strong></p>
    <a href="{{ url('/student/leaderboard') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Voir classement</a>
</div>
@endsection