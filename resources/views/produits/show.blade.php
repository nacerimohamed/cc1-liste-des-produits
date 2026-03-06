<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produit Details</title>
</head>
<body>
@extends('layouts.app')
@section('title', 'Détails Produit')
@section('content')
<h1>Détails Produit</h1>

<table>
    <tr>
        <th>Nom</th>
        <td>{{ $produit->nom }}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{ $produit->description }}</td>
    </tr>
    <tr>
        <th>Prix</th>
        <td>{{ $produit->prix }} MAD</td>
    </tr>
    <tr>
        <th>Quantité</th>
        <td>{{ $produit->quantite }}</td>
    </tr>
    <tr>
        <th>Catégorie</th>
        <td>{{ $produit->categorie->nom }}</td>
    </tr>
    <tr>
        <th>Image</th>
        <td><img src="{{ $produit->urlImage }}" alt="{{ $produit->nom }}"></td>
    </tr>
</table>

<a href="{{ route('produits.index') }}" class="button">Retour</a>
<a href="{{ route('produits.edit', $produit->id) }}" class="button" style="background:#f59e0b;">Modifier</a>
@endsection

</body>
</html>