<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memory;

use Illuminate\Support\Facades\DB;

use App\Services\CheckFormData;

class MemoryController extends Controller
{
    //
    public function index()
    {
        $memories = DB::table('memories')
                    ->orderBy('date','desc')
                    ->get();

        $memory = Memory::first();

        $size =CheckFormData::checkSize($memory);
        $w_condition =CheckFormData::checkW_condition($memory);
        $number =CheckFormData::checkNumber($memory);
        $state =CheckFormData::checkState($memory);
        $direction =CheckFormData::checkDirection($memory);
        $people =CheckFormData::checkPeople($memory);

        return view('memories/index', compact('memories','size','w_condition','number','state','direction','people'));
    }

    public function create()
    {
        return view('memories/create');
    }

    public function store(Request $request)
    {
        $memory = new Memory;


        $memory->point = $request->input('point');
        $memory->date = $request->input('date');
        $memory->size = $request->input('size');
        $memory->w_condition = $request->input('w_condition');
        $memory->number = $request->input('number');
        $memory->state = $request->input('state');
        $memory->direction = $request->input('direction');
        $memory->people = $request->input('people');
        $memory->image = $request->input('image');

        $memory->save();

        return redirect('memories/index');
    }

    public function edit($id)
    {
        $memory = Memory::find($id);

        return view('memories/edit', compact('memory'));
    }

    public function update(Request $request, $id)
    {
        $memory = Memory::find($id);

        $memory->point = $request->input('point');
        $memory->date = $request->input('date');
        $memory->size = $request->input('size');
        $memory->w_condition = $request->input('w_condition');
        $memory->number = $request->input('number');
        $memory->state = $request->input('state');
        $memory->direction = $request->input('direction');
        $memory->people = $request->input('people');
        $memory->image = $request->input('image');

        $memory->save();

        return redirect('memories/index');
    }

    public function destroy($id)
    {
        $memory = Memory::find($id);
        $memory->delete();

        return redirect('memories/index');
    }
}
