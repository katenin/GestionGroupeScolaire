<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion d'École</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- En-tête -->
    <header class="bg-primary text-white py-4 sticky-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Groupe Scolaire EL OLAM</h1>
                <nav class="nav">
                    <a class="nav-link text-white" href="#">Accueil</a>
                    <a class="nav-link text-white" href="{{route('eleves.create')}}">Élèves</a>
                    <a class="nav-link text-white" href="#">Enseignants</a>
                    <a class="nav-link text-white" href="#">Cours</a>
                    <a class="nav-link text-white" href="{{ route('register') }}">Inscription</a>
                    <a class="nav-link text-white" href="{{ route('login') }}">Finances</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Section de bienvenue -->
    <section class="bg-light text-center py-5">
        <div class="container">
            <h2 class="display-4">Bienvenue sur la plateforme de gestion scolaire</h2>
            <p class="lead">Gérez vos élèves, enseignants et plus encore avec simplicité.</p>
            <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
        </div>
    </section>

    <!-- Tableau de bord -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Statistiques</h5>
                            <p class="card-text">Total élèves : 450</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <x-select name="country" :options="['fr' => 'France', 'us' => 'United States', 'es' => 'Spain']" selected="{{ old('country') }}"
                        label="Choisissez un pays" />
                </div>
                <x-select-multiple name="languages" :options="['fr' => 'French', 'en' => 'English', 'es' => 'Spanish']" :selected="old('languages', ['fr', 'en'])"
                    label="Choisissez vos langues préférées" />

                <div class="col-md-4">
                    <div class="card">
                        <!-- Formulaire de soumission -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf <!-- Clé de sécurité pour le formulaire -->
                            <div class="card-body">
                                <h5 class="card-title">Se connecter </h5>

                                <x-input-ordinaire type="email" name="email" value="{{ old('email') }}"
                                    label="Adresse e-mail" />
                                <x-input-ordinaire type="password" name="password" value="{{ old('password') }}"
                                    label="Mot de passe" />
                                <x-button-ordinaire type="submit" class="btn btn-success">
                                    Envoyer
                                </x-button-ordinaire>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cours à venir</h5>
                            <p class="card-text">Nombre de cours aujourd'hui : 5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Paiements</h5>
                            <p class="card-text">Total dû : 1 500 000 F CFA </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section class="bg-light py-5">
        <div class="container">
            <h3 class="text-center">Ce que nos utilisateurs disent</h3>
            <div class="row mt-4">
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p class="mb-0">“La plateforme a transformé notre façon de gérer l'école.”</p>
                        <footer class="blockquote-footer">Enseignant A</footer>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p class="mb-0">“Simple et efficace, je recommande.”</p>
                        <footer class="blockquote-footer">Enseignant B</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Groupe Scolaire EL OLAM. Tous droits réservés.</p>
            <a href="#" class="text-white">Mentions légales</a> |
            <a href="#" class="text-white">Politique de confidentialité</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
