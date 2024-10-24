<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion Groupe Scolaire</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Lien vers le CSS compilé -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Groupe Scolaire" class="h-12">
                <h1 class="ml-4 text-xl font-semibold">Groupe Scolaire XYZ</h1>
            </div>
            <nav class="flex space-x-4">
                {{-- <a href="{{ route('#) }}" class="hover:text-gray-300">Accueil</a>
                <a href="{{ route('students.index') }}" class="hover:text-gray-300">Gestion des élèves</a>
                <a href="{{ route('teachers.index') }}" class="hover:text-gray-300">Gestion du personnel</a>
                <a href="{{ route('courses.index') }}" class="hover:text-gray-300">Cours & Emploi du temps</a>
                <a href="{{ route('finance.index') }}" class="hover:text-gray-300">Paiements</a>
                <a href="{{ route('settings.index') }}" class="hover:text-gray-300">Paramètres</a> --}}
            </nav>
            @auth
                <div class="flex items-center">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="Photo de profil" class="h-10 rounded-full">
                    <span class="ml-2">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="ml-4">
                        @csrf
                        <button type="submit" class="text-red-400 hover:text-red-600">Déconnexion</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-white hover:underline">Connexion</a>
            @endauth
        </div>
    </header>

    <!-- Bannière -->
    <section class="bg-gray-200 text-center p-8">
        <h2 class="text-2xl font-bold">Bienvenue sur la plateforme de gestion du Groupe Scolaire XYZ</h2>
        <p class="mt-4">Gérez facilement vos élèves, enseignants, emplois du temps et plus encore.</p>
        <div class="mt-6">
            {{-- <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Inscrire un élève</a>
            <a href="{{ route('timetable') }}" class="ml-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Voir l'emploi du temps</a>
            <a href="{{ route('reports') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Accéder aux rapports</a> --}}
        </div>
    </section>

    <!-- Tableau de Bord -->
    <section class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold">Statistiques des élèves</h3>
            <p class="mt-2">Total élèves : <strong>450</strong></p>
            <p>Présence moyenne : <strong>92%</strong></p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold">Cours à venir</h3>
            <p class="mt-2">Nombre de cours aujourd'hui : <strong>5</strong></p>
            <p>Prochain cours : <strong>Mathématiques - 10:00</strong></p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold">Paiements</h3>
            <p class="mt-2">Frais scolaires en attente : <strong>10 paiements</strong></p>
            <p>Total dû : <strong>15 000 €</strong></p>
        </div>
    </section>

    <!-- Sections dédiées aux utilisateurs -->
    <section class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">Espace Enseignants</h3>
            <p class="mt-2">Accédez à la gestion de vos cours, ajoutez des notes et communiquez avec vos élèves.</p>
            {{-- <a href="{{ route('teachers.dashboard') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Accéder au tableau de bord enseignant</a> --}}
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mt-4">
            <h3 class="text-xl font-bold">Espace Élèves</h3>
            <p class="mt-2">Consultez vos résultats, téléchargez des devoirs, et suivez vos progrès scolaires.</p>
            {{-- <a href="{{ route('students.dashboard') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Accéder à l'espace élève</a> --}}
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mt-4">
            <h3 class="text-xl font-bold">Espace Parents</h3>
            <p class="mt-2">Suivez les performances de vos enfants et effectuez les paiements en ligne.</p>
            {{-- <a href="{{ route('parents.dashboard') }}" class="mt-4 inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Accéder à l'espace parent</a> --}}
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Groupe Scolaire XYZ. Tous droits réservés.</p>
            <p>
                <a href="#" class="hover:underline">Mentions légales</a> |
                <a href="#" class="hover:underline">Politique de confidentialité</a>
            </p>
        </div>
    </footer>
    >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
