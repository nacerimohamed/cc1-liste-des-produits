<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(auth()->check())
    <p>Utilisateur connecté</p>
@else
    <p>Utilisateur non connecté</p>
@endif
</body>
</html>