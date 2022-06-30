<?php

namespace App\Http\Controllers;

use App\Models\Shayari;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function birthday()
    {
        $birthday = Shayari::select([
            'shayari'
        ])->where('category_id',11)
        ->paginate(5);
        return view('index', ['shayaris'=>$birthday]);
    }
}
