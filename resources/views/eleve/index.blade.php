
@extends('layouts.app')


@section('content')
<x-layout>

    <div class="container">
        <h1>Liste des élèves</h1>

        <a href="{{ route('eleves.create') }}" class="btn btn-primary mb-3">Ajouter un élève</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->id }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->email }}</td>
                        <td>{{ $eleve->date_naissance }}</td>
                        <td>{{ $eleve->sexe }}</td>
                        <td>
                            <a href="{{ route('eleves.show', $eleve) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('eleves.edit', $eleve) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('eleves.destroy', $eleve) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

@endsection
