<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Talent;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function show()
    {
        $talents = Talent::all();
        return view('index', compact('talents'));
    }
}
