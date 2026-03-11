@extends('layouts.app')

@section('title','Inscription')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl mb-4">Inscription</h1>
    <form action="#" method="POST">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="prenom" class="block mb-1">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label for="nom" class="block mb-1">Nom</label>
                <input type="text" id="nom" name="nom" class="w-full border rounded px-3 py-2" />
            </div>
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1">Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="password" class="block mb-1">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label for="password_confirmation" class="block mb-1">Confirmation mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border rounded px-3 py-2" />
            </div>
        </div>
        <div class="mb-4">
            <label for="niveau" class="block mb-1">Niveau scolaire</label>
            <select id="niveau" name="niveau" class="w-full border rounded px-3 py-2">
                <option value="">Sélectionner</option>
                <option value="primair">Primaire</option>
                <option value="college">Collège</option>
                <option value="lycee">Lycée</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="terms" class="form-checkbox" />
                <span class="ml-2">J'accepte les conditions</span>
            </label>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">S'inscrire</button>
    </form>
</div>
@endsection