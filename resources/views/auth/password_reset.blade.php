@extends('layouts.app')

@section('title','Réinitialisation mot de passe')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl mb-4">Mot de passe oublié</h1>
    <form action="#" method="POST">
        <div class="mb-4">
            <label for="email" class="block mb-1">Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" />
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Envoyer le lien</button>
    </form>
</div>
@endsection