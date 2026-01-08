<h1>Pokedex Lists</h1>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Type</td>
            <td>Species</td>
            <td>Height</td>
            <td>Weight</td>
            <td>HP</td>
            <td>Attack</td>
            <td>Defense</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
    </thead>

@foreach($pokedexs as $item)
<tr>
    <td>{{ $item->id }}</td>
    {{-- กดชื่อเพื่อดูรายละเอียด --}}
    <td>
        <a href="{{ url('/pokedexs/'.$item->id) }}">
            {{ $item->name }}
        </a>
    </td>
    <td>{{ $item->type }}</td>
    <td>{{ $item->species }}</td>
    <td>{{ $item->height }}</td>
    <td>{{ $item->weight }}</td>
    <td>{{ $item->hp }}</td>
    <td>{{ $item->attack }}</td>
    <td>{{ $item->defense }}</td>
    <td>
        <img src="{{ $item->image_url }}" width="80">
    </td>
    <td>
        <a class="btn btn-warning btn-sm"href="{{ url('/pokedexs/'.$item->id.'/edit') }}">
           แก้ไข
        </a>

        <form style="display:inline-block"action="{{ url('/pokedexs/'.$item->id) }}"method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm">ลบ</button>
        </form>
    </td>
</tr>
@endforeach
</table>
