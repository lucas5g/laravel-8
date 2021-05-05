<?php

namespace App\Http\Controllers\HC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Lucas';
        $idade = 29;

        $arr = [ 10, 29, 30, 40, 50];

        $names = ['Lucas', 'Talita', 'Marcos'];

        return view('welcome', [
            'name' => $nome,
            'age' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'names' => $names
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
