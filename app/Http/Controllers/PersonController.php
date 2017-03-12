<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('persons');

                //$people = Person::all();
        //return view('index');       
        /*$people = Person::where('first_name', 'Kristaps')
                ->orderBy('first_name', 'desc')
                ->take(2)
                ->get();
    
        foreach ($people as $person) {
            echo $person->first_name;
        }*/
    }
}
