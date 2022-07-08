<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class NonvegController extends Controller
{
    public function nonveg()
    {
        $jokes = Joke::select([
            'joke'
        ])->where('category_id',9)
        ->paginate(8);
        
        return view('joke',['jokes'=>$jokes]);
       
    
    }
}
