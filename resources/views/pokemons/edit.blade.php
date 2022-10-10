<x-layout titre="Edition d'un pokemon">
{{--
   messages d'erreurs dans la saisie du formulaire.
--}}

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--
     formulaire de saisie d'une tâche
     la fonction 'route' utilise un nom de route.
     '@csrf' ajoute un champ caché qui permet de vérifier
       que le formulaire vient du serveur.
     '@method('PUT') précise à Laravel que la requête doit être traitée
      avec une commande PUT du protocole HTTP.
  --}}

<form action="{{route('pokemons.update',$pokemon->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="text-center" style="margin-top: 2rem">
        <h3>Modification d'un pokemon</h3>
        <hr class="mt-2 mb-2">
    </div>

    {{-- le nom  --}}
    <div>
        <label for="nom"><strong>Nom : </strong></label>
        <input type="text" name="nom" id="nom"
               value="{{ $pokemon->nom }}">
    </div>

    {{-- l'extension  --}}
    <div>
        <label for="extension"><strong>Extension : </strong></label>
        <input type="text" name="extension" id="extension"
               value="{{ $pokemon->extension }}">
    </div>

    {{-- la vie  --}}
    <div>
        <label for="vie"><strong>Vie : </strong></label>
        <input type="number" name="vie" id="vie"
               value="{{ $pokemon->vie }}">
    </div>

    {{-- le type  --}}
    <div>
        <label for="type"><strong>Type : </strong></label>
        <input type="text" name="type" id="type"
               value="{{ $pokemon->type }}">
    </div>

    {{-- les faiblesses  --}}
    <div>
        <label for="faiblesse"><strong>Faiblesse : </strong></label>
        <input type="text" name="faiblesse" id="faiblesse"
               value="{{ $pokemon->faiblesse }}">
    </div>

    {{-- les degats  --}}
    <div>
        <label for="degat"><strong>Degat : </strong></label>
        <input type="number" name="degat" id="degat"
               value="{{ $pokemon->degat }}">
    </div>

    <div>
        <button class="btn btn-success" type="submit">Valide</button>
    </div>
</form>

    <h2>Choix d'une image</h2>
    <form action="{{route('pokemons.upload',$pokemon->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="doc">Image : </label>
            <input type="file" name="image" id="doc">
        </div>
        <input type="submit" value="Télécharger" name="submit">
    </form>
</x-layout>
