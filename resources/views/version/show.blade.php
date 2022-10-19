<x-layout titre="Affiche des pokemons d'un jeu ">
    <table>
        <thead>
        <th>#</th>
        <th>nom</th>
        <th>extension</th>
        <th>vie</th>
        <th>type</th>
        <th>faiblesse</th>
        <th>degat</th>
        <th>numero</th>
        <th>date_sortie</th>
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
                <td>{{$pokemon['information']->numero}}</td>
                <td>{{$pokemon['information']->date_sortie}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <form action="{{route('jeux.index')}}" method="GET">
        @csrf
        <div class="text-center">
            <button type="submit" name="delete" value="annule">Retour à la liste</button>
        </div>
    </form>
</x-layout>
