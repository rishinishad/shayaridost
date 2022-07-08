<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class AttitudeController extends Controller
{
    public function attitude()
    {
        $attitude = Shayari::select([
            'shayari'
        ])->where('category_id', 3)
            ->paginate(8);
        return view('index', ['shayaris' => $attitude]);
    }
}
