@extends('template.default')
@section('content')
<h1>Pokedexes Create</h1>

<form action="{{ url('/pokedexs') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Name</label>
    <input class="form-control" type="text" name="name" required>

    <label>Type</label>
    <input class="form-control" type="text" name="type" required>

    <label>Species</label>
    <input class="form-control" type="text" name="species" required>

    <label>Height</label>
    <div class="input-group">
    <input class="form-control" type="number" name="height" min="0" step="0.1" required>
    <span class="input-group-text">M</span>
    </div>

    <label>Weight</label>
    <div class="input-group">
    <input class="form-control" type="number" name="weight" min="0" step="0.1" required>
    <span class="input-group-text">Kg</span>
    </div>

    <label>HP</label>
    <input class="form-control" type="number" name="hp" min="0" required>

    <label>Attack</label>
    <input class="form-control" type="number" name="attack" min="0" required>

    <label>Defense</label>
    <input class="form-control" type="number" name="defense" min="0" required>

    <label>Image URL</label>
    <input class="form-control"type="url"name="image_url"placeholder="https://example.com/image.png">

    <button class="btn btn-primary mt-2">บันทึก</button>
</form>

@include('pokedexs.table')
@endsection
