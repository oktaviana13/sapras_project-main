<?php

namespace App\Http\Controllers;

use App\Models\Sman;
use Illuminate\Http\Request;
use View;

class SmanController extends Controller
{
    //
    public function index() : View {
        $sman = Sman::latest()->paginate(10);
    return view ('sman.index', compact('sman'));
    }
}
