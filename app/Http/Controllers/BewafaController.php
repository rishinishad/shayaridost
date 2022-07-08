<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class BewafaController extends Controller
{
    public function bewafa()
    {
        $bewafa = Shayari::select([
            'shayari'
        ])->where('category_id',5)
        ->paginate(8);
        return view('index', ['shayaris'=>$bewafa]);
    }
}
