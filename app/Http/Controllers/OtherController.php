<?php

namespace App\Http\Controllers;

use App\Models\Shayari;

class OtherController extends Controller
{
    public function other()
    {
        $others = Shayari::select([
            'shayari'
        ])->where('category_id',3)
        ->paginate(5);
        return view('index', ['shayaris'=>$others]);
    }
}
