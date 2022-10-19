<x-layout titre="Affichage des jeux">
    @if(!empty($jeux))
        <table>
            <thead>
            <th>#</th>
            <th>nom</th>
            <th>editeur</th>
            <th>genre</th>
            <th>visualisation</th>
            </thead>
            <tbody>
            @foreach($jeux as $jeu)
                <tr>
                    <td>{{$jeu->id}}</td>
                    <td>{{$jeu->nom}}</td>
                    <td>{{$jeu->editeur}}</td>
                    <td>{{$jeu->genre}}</td>
                    <td><a href="{{route('jeux.show',$jeu->id)}}">👁️️</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h3>aucun jeu</h3>
    @endif
</x-layout>
