<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('produits.store') }}" method="POST">
    @csrf

    <input type="text" name="nom">

    <input type="text" name="description">

    <input type="number" name="prix">

    <input type="number" name="quantite">
    <input type="file" name="urlImage">

    <select name="id_cat">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
        @endforeach
    </select>

    <button type="submit">Ajouter</button>

</form>
</body>
</html>