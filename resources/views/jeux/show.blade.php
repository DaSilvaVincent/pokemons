<x-layout titre="Affiche un jeu ">
    <table>
        <thead>
        <th>#</th>
        <th>nom</th>
        <th>editeur</th>
        <th>genre</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$jeu->id}}</td>
            <td>{{$jeu->nom}}</td>
            <td>{{$jeu->editeur}}</td>
            <td>{{$jeu->genre}}</td>
        </tr>
        </tbody>
    </table>


    <form action="{{route('version.showDate',[$jeu->id])}}" method="POST">
        @csrf
        <div>
            <label for="date">Date :</label>
            <input type="date" id="nom" name="date">
        </div>
        <div>
            <button class="bouton" type="reset">Annule</button>
            <button class="bouton" type="submit">Valide</button>
        </div>
    </form>

    <form action="{{route('version.show',$jeu->id)}}" method="GET">

            <div class="text-center">
                <button type="submit" name="delete" value="valide">Affichage des pokémons du jeu</button>
            </div>
        </form>

        <form action="{{route('jeux.index')}}" method="GET">
            @csrf
            <div class="text-center">
                <button type="submit" name="delete" value="annule">Retour à la liste</button>
            </div>
        </form>
</x-layout>
