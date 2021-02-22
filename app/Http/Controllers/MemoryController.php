<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memory;

class MemoryController extends Controller
{
    //
    public function index()
    {
        $values = Memory::all();

        // dd($values);

        return view('memories/memory', compact('values'));
    }
}
