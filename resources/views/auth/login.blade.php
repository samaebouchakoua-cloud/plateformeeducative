@extends('layouts.auth')

@section('title', 'Connexion')
@section('subtitle', 'Connectez-vous à votre espace éducatif')

@section('content')
<form action="{{ url('/challenges') }}" method="GET">
    <div class="form-group">
        <label class="form-label" for="email">Email ou Identifiant</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-user input-icon"></i>
            <input type="text" id="email" name="email" class="form-control" placeholder="Entrez votre email ou identifiant" required>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label" for="password">Mot de passe</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" id="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-4">
        <i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i> Connexion
    </button>
    
    <div class="auth-links">
        <a href="{{ url('/forgot-password') }}" class="auth-link">Mot de passe oublié ?</a>
        <a href="{{ url('/register') }}" class="auth-link">Créer un compte</a>
    </div>
</form>
@endsection
