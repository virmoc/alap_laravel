<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tevekenyseg;

class tevekenysegController extends Controller
{
    public function index(Request $request){
    
    }
    
    public function store(Request $request){
    
    
        $request->validate([]);
    
        return Tevekenyseg::create($request->all());
    }
}
