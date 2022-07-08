<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class VegController extends Controller
{
    public function veg()
    {
        $jokes = Joke::select([
            'joke'
        ])->where('category_id',8)
        ->paginate(8);
        
        return view('joke',['jokes'=>$jokes]);
       
    
    }
}
