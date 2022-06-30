<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class ComedyController extends Controller
{
    public function comedy()
    {
        $comedy = Shayari::select([
            'shayari'
        ])->where('category_id',6)
        ->paginate(5);
        return view('index', ['shayaris'=>$comedy]);
    }
}
