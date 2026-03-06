
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
@section('title', 'Liste des Produits')
@section('content')
<h1>Liste des Produits</h1>

<a href="{{ route('produits.create') }}" class="button">Ajouter Produit</a>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Catégorie</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produits as $produit)
        <tr>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->prix }} MAD</td>
            <td>{{ $produit->quantite }}</td>
            <td>{{ $produit->categorie->nom }}</td>
            <td><img src="{{ $produit->urlImage }}" alt="{{ $produit->nom }}"></td>
            <td>
                <a href="{{ route('produits.show', $produit->id) }}" class="button">Voir</a>
                <a href="{{ route('produits.edit', $produit->id) }}" class="button" style="background:#f59e0b;">Edit</a>
                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
</body>
</html>