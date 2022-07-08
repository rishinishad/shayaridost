<?php

namespace App\Http\Controllers;

use App\Models\Shayari;

class MorningController extends Controller
{
    public function morning()
    {
        $mornings = Shayari::select([
            'shayari'
        ])->where('category_id',1)
        ->paginate(8);
        return view('index', ['shayaris'=>$mornings]);
    }
}
