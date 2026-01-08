@extends('template.default')
@section('content')
<h1>Pokedex Update</h1>
<form action="{{ url('/pokedexs/'.$pokedex_update->id) }}"
      method="post">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input class="form-control"type="text"name="name"value="{{ $pokedex_update->name }}">

    <label>Type</label>
    <input class="form-control"type="text"name="type"value="{{ $pokedex_update->type }}">

    <label>Species</label>
    <input class="form-control"type="text"name="species"value="{{ $pokedex_update->species }}">

    <label>Height</label>
    <div class="input-group">
        <input class="form-control"type="number"step="0.1"name="height"value="{{ $pokedex_update->height }}">
        <span class="input-group-text">m</span>
    </div>

    <label>Weight</label>
    <div class="input-group">
        <input class="form-control"type="number"step="0.1"name="weight"value="{{ $pokedex_update->weight }}">
        <span class="input-group-text">kg</span>
    </div>

    <label>HP</label>
    <input class="form-control"type="number"name="hp"value="{{ $pokedex_update->hp }}">

    <label>Attack</label>
    <input class="form-control"type="number"name="attack"value="{{ $pokedex_update->attack }}">

    <label>Defense</label>
    <input class="form-control"type="number"name="defense"value="{{ $pokedex_update->defense }}">

    <label>Image URL</label>
    <input class="form-control"type="url"name="image_url"value="{{ $pokedex_update->image_url }}">

    <button class="btn btn-primary mt-2">บันทึก</button>
</form>
@include('pokedexs.table')
@endsection
