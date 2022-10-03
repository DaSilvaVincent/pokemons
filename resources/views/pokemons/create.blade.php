<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation d'un pokemon</title>
</head>
<body>
    <h1>Création d'un pokemon</h1>

    {{--
       messages d'erreurs dans la saisie du formulaire.
    --}}

    @if ($errors->any())
        <div class="errors">
            <h3 class="titre-erreurs">Liste des erreurs</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--
         formulaire de saisie d'une tâche
         la fonction 'route' utilise un nom de route
         'csrf_field' ajoute un champ caché qui permet de vérifier
           que le formulaire vient du serveur.
      --}}

    <form action="{{route('pokemons.store')}}" method="POST">
        {!! csrf_field() !!}
        <div class="form-create">
            {{-- le nom  --}}
            <div class="form-control">
                <label class="form-label" for="nom">Nom :</label>
                <input class="form-input" type="text" id="nom" name="nom"
                       value="{{ old('nom') }}">
            </div>

            {{-- l'extension  --}}
            <div class="form-control">
                <label class="form-label" for="extension">Extension :</label>
                <input class="form-input" type="text" id="extension" name="extension"
                       value="{{ old('extension') }}">
            </div>

            {{-- la vie  --}}
            <div class="form-control">
                <label class="form-label" for="vie">PV :</label>
                <input class="form-input" type="number" id="vie" name="vie"
                       value="{{ old('vie') }}">
            </div>

            {{-- le type  --}}
            <div class="form-control">
                <label class="form-label" for="type">Type :</label>
                <input class="form-input" type="text" id="type" name="type"
                       value="{{ old('type') }}">
            </div>

            {{-- les faiblesses  --}}
            <div class="form-control">
                <label class="form-label" for="faiblesse">faiblesse :</label>
                <input class="form-input" type="text" id="faiblesse" name="faiblesse"
                       value="{{ old('faiblesse') }}">
            </div>

            {{-- les degats  --}}
            <div class="form-control">
                <label class="form-label" for="degat">Degat :</label>
                <input class="form-input" type="number" id="degat" name="degat"
                       value="{{ old('degat') }}">
            </div>

            <div class="form-buttons">
                <button type="reset">Annule</button>
                <button type="submit">Valide</button>
            </div>
        </div>
    </form>

</body>
</html>
