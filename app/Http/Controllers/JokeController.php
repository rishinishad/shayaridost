<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
// use Illuminate\Pagination\Paginator;

class JokeController extends Controller
{
    
    public function joke()
    {
        // Paginator::useBootstrap();
        $jokes = Joke::select([
            'joke'
        ])->paginate(8);
        
        return view('joke',['jokes'=>$jokes]);
       
    
    }
}
