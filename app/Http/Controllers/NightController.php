<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class NightController extends Controller
{
    public function night()
    {
        $nights = Shayari::select([
            'shayari'
        ])->where('category_id',2)
        ->paginate(8);
        return view('index', ['shayaris'=>$nights]);
    }
}
