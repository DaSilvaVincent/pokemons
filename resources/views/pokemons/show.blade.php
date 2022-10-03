<html>
<head>
    <title>Affichage d'un pokemon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3>Affichage d'un pokemon</h3>
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
            <tr>
                <td>{{$pokemon->id}}</td>
                <td>{{$pokemon->nom}}</td>
                <td>{{$pokemon->extension}}</td>
                <td>{{$pokemon->vie}}</td>
                <td>{{$pokemon->type}}</td>
                <td>{{$pokemon->faiblesse}}</td>
                <td>{{$pokemon->degat}}</td>
            </tr>
        </tbody>
    </table>
        <form action="{{route('pokemons.destroy',$pokemon->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="text-center">
                <button type="submit" name="delete" value="valide">supprimer</button>
                <button type="submit" name="delete" value="annule">Retour a la liste</button>
            </div>
        </form>
</body>
</html>
