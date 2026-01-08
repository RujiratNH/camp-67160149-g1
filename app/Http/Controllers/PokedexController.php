<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller{
    public function index(){
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

   public function store(Request $request){
    Pokedex::create([
        'name' => $request->name,
        'type' => $request->type,
        'species' => $request->species,
        'height' => $request->height,
        'weight' => $request->weight,
        'hp' => $request->hp,
        'attack' => $request->attack,
        'defense' => $request->defense,
        'image_url' => $request->image_url,
    ]);
    return redirect('/pokedexs');
    }
    public function show($id){
        $data['pokedex'] = Pokedex::findOrFail($id);
        return view('pokedexs.show', $data);
    }

    public function edit($id){
        $data['pokedex_update'] = Pokedex::findOrFail($id);
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.update', $data);
    }

    public function update(Request $request, $id){
    $pokedex = Pokedex::find($id);

    if ($request->hasFile('image')) {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());
        return redirect('/pokedexs');
    }

    $pokedex->update($request->except('image'));

    return redirect('/pokedexs');
    }

    public function destroy($id){
        Pokedex::findOrFail($id)->delete();
        return redirect('/pokedexs');
    }
}
