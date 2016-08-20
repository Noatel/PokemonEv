<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Pokemon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function pokedex()
    {

        return view('pokedex');
    }

    public function search(Request $request)
    {

        $query = $request->data;

        if (ctype_digit($query)) {
            $search = DB::table('pokemon')->where('number', '=', $query)->get();
            return $search;
        } else {
            $search = DB::table('pokemon')->where('name', 'LIKE', '%' . $query . '%')->get();


            return $search;
        }
    }

    public function getPokemon()
    {
        $opts = array('http' => array('header' => "User-Agent:MyAgent/1.0\r\n"));
        $context = stream_context_create($opts);
        $header = file_get_contents('http://pokemon.dev/pokedex', false, $context);

        $html = file_get_html($header);
        foreach ($html->find('tr') as $row) {
            // Parse table row here
        }


    }

    public function refresh_database(Request $request)
    {


        dd('good try');

        $pokemon = new Pokemon();
        $pokemon->number = $request->pokemon_id;
        $pokemon->exp = $request->pokemon_exp;
        $pokemon->name = $request->pokemon_name;
        $pokemon->hp = $request->hp;
        $pokemon->attack = $request->attack;
        $pokemon->defense = $request->defense;
        $pokemon->sp_attack = $request->sp_attack;
        $pokemon->sp_defense = $request->sp_defense;
        $pokemon->speed = $request->speed;
        $pokemon->total = $request->total;
        $pokemon->save();


    }
}
