<x-layout titre="Affichage des pokémons">
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
            <th>Modification</th>
            <th>visualisation</th>
            <th>supression</th>
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
                    <td><a href="{{route('pokemons.edit',$pokemon->id)}}">✏️</a></td>
                    <td><a href="{{route('pokemons.show',$pokemon->id)}}">👁️️</a></td>
                    <td><a href="{{route('pokemons.show',['pokemon'=> $pokemon->id, 'action'=>'delete'])}}">❌</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h3>aucun pokemon</h3>
@endif
</x-layout>
