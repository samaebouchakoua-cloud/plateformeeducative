<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSmart Platform - @yield('title', 'Dashboard')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-book-reader" style="margin-right: 12px; font-size:1.6rem;"></i> EduSmart
        </div>
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('challenges.index') }}" class="{{ request()->routeIs('challenges.*') ? 'active' : '' }}">
                    <i class="fas fa-medal"></i> Mes Challenges
                </a>
            </li>
            <li>
                <a href="{{ route('questions.index') }}" class="{{ request()->routeIs('questions.*') ? 'active' : '' }}">
                    <i class="fas fa-layer-group"></i> Banque de Questions
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-wrapper">
        <header class="top-header">
            <h1 class="page-title">@yield('page-title', 'Tableau de bord Enseignant')</h1>
            <div class="user-profile">
                <!-- Placeholder for user info -->
                <i class="fas fa-chalkboard-teacher fa-lg" style="color:var(--primary)"></i> Professeur.Admin
            </div>
        </header>

        <div class="content-container">
            @if(session('success'))
            <div class="alert alert-success mt-3 mb-4" style="background-color:var(--success-light); color:var(--success); padding:16px 20px; border-radius:var(--radius-md); border:1px solid var(--success); font-weight:600; display:flex; align-items:center; gap:12px; box-shadow:var(--shadow-sm);">
                <i class="fas fa-check-circle fa-xl"></i> {{ session('success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger mt-3 mb-4" style="background-color:var(--danger-light); color:var(--danger); padding:16px 20px; border-radius:var(--radius-md); border:1px solid var(--danger); box-shadow:var(--shadow-sm);">
                <div style="font-weight:600; margin-bottom:8px; display:flex; align-items:center; gap:10px;"><i class="fas fa-exclamation-triangle"></i> Veuillez corriger les erreurs suivantes :</div>
                <ul style="margin-left:30px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @yield('content')
        </div>
    </main>

    @yield('scripts')
</body>
</html>
