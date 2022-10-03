<html>
<head>
    <title>Liste des pokemons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>La liste des Pokemons</h2>

@if(!empty($pokemons))
    <table>
        <thead>
        <th>#</th>
        <th>nom</th>
        <th>extension</th>
        <th>vie</th>
        <th>type</th>
        <th>faiblesse</th>
        <th>degat</th>
        </thead>
        <tbody>
        @foreach($pokemons as $pokemon)
            <tr>
                <td>{{$pokemon->id}}</td>
                <td>{{$pokemon->nom}}</td>
                <td>{{$pokemon->extension}}</td>
                <td>{{$pokemon->vie}}</td>
                <td>{{$pokemon->type}}</td>
                <td>{{$pokemon->faiblesse}}</td>
                <td>{{$pokemon->degat}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <h3>aucun pokemon</h3>
@endif
</body>
</html>
