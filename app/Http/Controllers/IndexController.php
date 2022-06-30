<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(Request $request)
    {
        $shayaris = Shayari::select([
            'category_id',
            'shayari'
        ])
        ->paginate(5);
        // ->get();
        
        return view('index',['shayaris'=>$shayaris]);
       
    
    }
}
