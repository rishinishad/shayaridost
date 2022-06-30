<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class SadController extends Controller
{
    public function sad()
    {
        $sad = Shayari::select([
            'shayari'
        ])->where('category_id',4)
        ->paginate(5);
        return view('index', ['shayaris'=>$sad]);
    }
}
