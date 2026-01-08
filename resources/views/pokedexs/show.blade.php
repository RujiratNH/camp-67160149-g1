@extends('template.default')

@section('content')

<h1>{{ $pokedex->name }}</h1>

@if ($pokedex->image_url != null)
    <img src="{{ $pokedex->image_url }}" width="200">
@else
    <img src="https://via.placeholder.com/200" width="200">
@endif

<ul>
    <li>Type : {{ $pokedex->type }}</li>
    <li>Species : {{ $pokedex->species }}</li>
    <li>Height : {{ $pokedex->height }} M</li>
    <li>Weight : {{ $pokedex->weight }} Kg</li>
    <li>HP : {{ $pokedex->hp }}</li>
    <li>Attack : {{ $pokedex->attack }}</li>
    <li>Defense : {{ $pokedex->defense }}</li>
</ul>

<a class="btn btn-secondary" href="/pokedexs">ย้อนกลับ</a>

@endsection
