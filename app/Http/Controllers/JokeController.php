<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    public function joke()
    {
        $jokes = Joke::select([
            'joke'
        ])->paginate(5);
        
        return view('joke',['jokes'=>$jokes]);
       
    
    }
}
