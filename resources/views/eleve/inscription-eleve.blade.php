<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'Inscription d'un Élève</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Inscription d'un élève</h1>

        <!-- Afficher les erreurs de validation -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Afficher un message de succès après soumission -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulaire d'inscription -->
        <form action="{{ route('eleve.inscription') }}" method="POST">
            @csrf <!-- Clé de sécurité pour le formulaire -->

            <!-- Champ prénom -->
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
            </div>

            <!-- Champ nom -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" required>
            </div>

            <!-- Champ e-mail -->
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <!-- Champ date de naissance -->
            <div class="mb-3">
                <label for="date_naissance" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}" required>
            </div>

            <!-- Sélection du sexe -->
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <select class="form-select" id="sexe" name="sexe" required>
                    <option value="">-- Sélectionner --</option>
                    <option value="Homme" {{ old('sexe') == 'Homme' ? 'selected' : '' }}>Homme</option>
                    <option value="Femme" {{ old('sexe') == 'Femme' ? 'selected' : '' }}>Femme</option>
                </select>
            </div>

            <!-- Bouton de soumission -->
            <x-button type="submit" class="btn btn-primary">
                Inscrire
            </x-button>
        </form>
    </div>
</body>
</html>
