@extends('layouts.auth')

@section('title', 'Nouveau mot de passe')
@section('subtitle', 'Créez votre nouveau mot de passe (Étape 2)')

@section('content')
<form action="{{ url('/login') }}" method="GET">
    <div class="form-group">
        <label class="form-label" for="password">Nouveau mot de passe</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" id="password" name="password" class="form-control" placeholder="Entrez le nouveau mot de passe" required>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label" for="password_confirmation">Confirmation du mot de passe</label>
        <div class="has-icon" style="position:relative;">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmez le nouveau mot de passe" required>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-4">
        <i class="fas fa-check-circle" style="margin-right: 8px;"></i> Réinitialiser
    </button>
</form>
@endsection
