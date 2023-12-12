<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nuova richiesta per la posizione di revisor</h1>
    <h3>dall'utente:</h3>
    <ul>
        <li>nome: {{$inquiry->name}}</li>
        <li>cognome: {{$inquiry->surname}}</li>
        <li>email: {{$inquiry->email}}</li>
        <li>data di nascita: {{$inquiry->birth}}</li>
        <li>descrizione: {{$inquiry->inquiry}}</li>
        @if($inquiry->telephone)
        <li>telefono: {{$inquiry->telephone}}</li>
        @endif
    </ul>
    <a href="{{route('make_revisor')}}">Rendi revisor</a>
</body>
</html>