<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bejegyzes;

class bejegyzesController extends Controller
{
    public function index(){
    
        $bejegyzesek = response()->json(Bejegyzes::with('tevekenyseg')->get());
        return $bejegyzesek;
    }

    public function osztaly($id){
    
        /* $bejegyzesek = Bejegyzes::with('tevekenyseg')->where('osztaly_id') */
    }
    
    public function store(Request $request){
    
    
        $request->validate([]);
    
        return Bejegyzes::create($request->all());
    }
}
