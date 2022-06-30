<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class SantaController extends Controller
{
    public function santa()
    {
        $jokes = Joke::select([
            'joke'
        ])->where('category_id',7)
        ->paginate(5);
        
        return view('joke',['jokes'=>$jokes]);
       
    
    }
}
