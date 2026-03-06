<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('title', 'Ajouter Produit')
@section('content')
<h1>Ajouter Produit</h1>

<form action="{{ route('produits.store') }}" method="POST">
    @csrf
    <label>Nom</label>
    <input type="text" name="nom" value="{{ old('nom', $produit->nom ?? '') }}">

    <label>Description</label>
    <textarea name="description">{{ old('description', $produit->description ?? '') }}</textarea>

    <label>Prix</label>
    <input type="number" step="0.01" name="prix" value="{{ old('prix', $produit->prix ?? '') }}">

    <label>Quantité</label>
    <input type="number" name="quantite" value="{{ old('quantite', $produit->quantite ?? '') }}">

    <label>URL Image</label>
    <input type="text" name="urlImage" value="{{ old('urlImage', $produit->urlImage ?? '') }}">

    <label>Catégorie</label>
    <select name="id_cat">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ (old('id_cat', $produit->id_cat ?? '') == $cat->id) ? 'selected' : '' }}>
                {{ $cat->nom }}
            </option>
        @endforeach
    </select>

    <button type="submit">{{ $produit->id ?? '' ? 'Mettre à jour' : 'Ajouter' }}</button>
</form>
@endsection
</body>
</html>