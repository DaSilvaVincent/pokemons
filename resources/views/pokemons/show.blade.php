<x-layout titre="Affiche ou supprime un pokémon ">
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
                <td>{{$user->name}}</td>
            </tr>
        </tbody>
    </table>
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
