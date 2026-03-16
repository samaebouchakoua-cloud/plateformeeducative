@extends('layouts.auth')

@section('title', 'Inscription')
@section('subtitle', 'Rejoignez la plateforme éducative')

@section('content')
<form action="{{ url('/login') }}" method="GET">
    <div class="row">
        <div class="col-half form-group">
            <label class="form-label" for="first_name">Prénom</label>
            <div class="has-icon" style="position:relative;">
                <i class="fas fa-user-circle input-icon"></i>
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Prénom" required>
            </div>
        </div>
        <div class="col-half form-group">
            <label class="form-label" for="last_name">Nom</label>
            <div class="has-icon" style="position:relative;">
                <i class="far fa-id-badge input-icon"></i>
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Nom" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" required>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label" for="password">Mot de passe</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" id="password" name="password" class="form-control" placeholder="Créez un mot de passe" required>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label" for="password_confirmation">Confirmation mot de passe</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe" required>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="level">Niveau scolaire</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-graduation-cap input-icon"></i>
            <select id="level" name="level" class="form-control" required>
                <option value="" disabled selected>Sélectionnez votre niveau</option>
                <option value="Primaire">Primaire</option>
                <option value="Collège">Collège</option>
                <option value="Lycée">Lycée</option>
                <option value="Supérieur">Supérieur</option>
            </select>
        </div>
    </div>
    
    <div class="checkbox-group">
        <input type="checkbox" id="terms" required>
        <label for="terms" class="checkbox-label">J'accepte les conditions d'utilisation</label>
    </div>

    <button type="submit" class="btn btn-primary mt-4">
        <i class="fas fa-user-plus" style="margin-right: 8px;"></i> S'inscrire
    </button>
    
    <div class="auth-links" style="justify-content: center; margin-top: 25px;">
        <span style="color: var(--text-muted); margin-right: 8px;">Déjà un compte ?</span>
        <a href="{{ url('/login') }}" class="auth-link">Se connecter</a>
    </div>
</form>
@endsection
