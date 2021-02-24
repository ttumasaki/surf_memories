<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memory;

use Illuminate\Support\Facades\DB;

class MemoryController extends Controller
{
    //
    public function index()
    {
        $values = Memory::all();

        $memories = DB::table('memories')->get();

        return view('memories.index', compact('values'));
    }

    public function create()
    {
        return view('memories.create');
    }
}
