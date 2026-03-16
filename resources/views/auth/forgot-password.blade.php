@extends('layouts.auth')

@section('title', 'Mot de passe oublié')
@section('subtitle', 'Réinitialisez votre mot de passe (Étape 1)')

@section('content')
<form action="{{ url('/reset-password') }}" method="GET">
    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px; line-height: 1.5; text-align: center;">
        Saisissez votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.
    </p>

    <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre email" required>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-4">
        <i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Envoyer le lien
    </button>
    
    <div class="auth-links" style="justify-content: center; margin-top: 25px;">
        <a href="{{ url('/login') }}" class="auth-link">
            <i class="fas fa-arrow-left" style="margin-right:5px;"></i> Retour à la connexion
        </a>
    </div>
</form>
@endsection
