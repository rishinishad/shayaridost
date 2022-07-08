<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class OtherjokeController extends Controller
{
    public function otherjoke()
    {
        $jokes = Joke::select([
            'joke'
        ])->where('category_id',10)
        ->paginate(8);
        
        return view('joke',['jokes'=>$jokes]);
       
    
    }
}
