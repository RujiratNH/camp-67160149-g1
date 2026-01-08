@extends('template.default')

@section('content')

<h1>Pokedex Update</h1>

<form action="{{ url('/pokedexs/' . $pokedex_update->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name"
        value="{{ $pokedex_update->name }}">

    <label for="type">Type</label>
    <input class="form-control" type="text" name="type" id="type"
        value="{{ $pokedex_update->type }}">

    <label for="species">Species</label>
    <input class="form-control" type="text" name="species" id="species"
        value="{{ $pokedex_update->species }}">

    <label for="height">Height</label>
    <input class="form-control" type="number" step="0.1" name="height" id="height"
        value="{{ $pokedex_update->height }}">

    <label for="weight">Weight</label>
    <input class="form-control" type="number" step="0.1" name="weight" id="weight"
        value="{{ $pokedex_update->weight }}">

    <label for="hp">HP</label>
    <input class="form-control" type="number" name="hp" id="hp"
        value="{{ $pokedex_update->hp }}">

    <label for="attack">Attack</label>
    <input class="form-control" type="number" name="attack" id="attack"
        value="{{ $pokedex_update->attack }}">

    <label for="defense">Defense</label>
    <input class="form-control" type="number" name="defense" id="defense"
        value="{{ $pokedex_update->defense }}">

    <label for="image_url">Image URL</label>
    <input class="form-control" type="url" name="image_url" id="image_url"
        value="{{ $pokedex_update->image_url }}">

    <button class="btn btn-primary mt-3" type="submit">Submit</button>
</form>

<h1 class="mt-4">Pokedex Lists</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Type</td>
            <td>HP</td>
            <td>Attack</td>
            <td>Defense</td>
        </tr>
    </thead>

    <?php foreach ($pokedexs as $item) { ?>
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->hp }}</td>
            <td>{{ $item->attack }}</td>
            <td>{{ $item->defense }}</td>
        </tr>
    <?php } ?>

</table>

@endsection
