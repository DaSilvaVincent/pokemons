<x-layout titre="Affiche ou supprime un pokémon ">

    <div>Affichage du pokémon</div>
    <table>
        <thead>
        <th>#</th>
        <th>nom</th>
        <th>extension</th>
        <th>vie</th>
        <th>type</th>
        <th>faiblesse</th>
        <th>degat</th>
        <th>Utilisateur créateur</th>
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
                <td>{{$pokemon->user->name}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div>Affichage des jeux du pokémon</div>
        <table>
            <thead>
                <th>#</th>
                <th>nom</th>
                <th>editeur</th>
                <th>genre</th>
                <th>numero</th>
                <th>date_sortie</th>
            </thead>
            <tbody>
            @foreach($jeux as $jeu)
                <tr>
                    <td>{{$jeu->id}}</td>
                    <td>{{$jeu->nom}}</td>
                    <td>{{$jeu->editeur}}</td>
                    <td>{{$jeu->genre}}</td>
                    <td>{{$jeu['information']->numero}}</td>
                    <td>{{$jeu['information']->date_sortie}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <br>
    <div clas="image">
        <img src="{{url('storage/'.$pokemon->url_media)}}" alt="le logo">
    </div>
        @if($action == 'delete')
            <form action="{{route('pokemons.destroy',$pokemon->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="text-center">
                    <button type="submit" name="delete" value="valide">Valider la suppression</button>
                    <button type="submit" name="delete" value="annule">Annuler la suppression</button>
                </div>
            </form>
        @else
            <form action="{{route('pokemons.index')}}" method="GET">
                @csrf
                <div class="text-center">
                    <button type="submit" name="delete" value="annule">Retour à la liste</button>
                </div>
            </form>
        @endif
</x-layout>
