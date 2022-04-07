<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class usersController extends Controller
{
    public function index(Request $request){
    
    }
    
    public function store(Request $request){
    
    
        $request->validate([]);
    
        return Users::create($request->all());
    }
}

