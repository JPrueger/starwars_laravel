<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  

class CharacterController extends Controller
{
    public function index () {
        // mittels http get request von der api die people holen -> in ein json()
        $data = Http::get('https://swapi.dev/api/people/')->json();

        // an die view zurückgeben (data ist das komplette array von people)
        return view('characters', ['data' => $data]);
    }
}
