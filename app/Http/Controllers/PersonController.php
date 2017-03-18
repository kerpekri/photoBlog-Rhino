<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        // te pec idejas vajag atlasit tikai pirmos divus ierakstus - where condition
        $people = Person::paginate(2);

        if ($request->ajax()) {
            $view = view('data',compact('people'))->render();
            return response()->json(['html'=>$view]);
        }
        
        return view('persons',compact('people'));
    }
}