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
        $memories = DB::table('memories')
                    ->orderBy('date','desc')
                    ->get();

        $memory = Memory::first();

        if($memory->size === 1){$size = 'フラット〜スネ';}
        if($memory->size === 2){$size = 'スネ〜ヒザ';}
        if($memory->size === 3){$size = 'ヒザ〜モモ';}
        if($memory->size === 4){$size = 'モモ〜コシ';}
        if($memory->size === 5){$size = 'コシ〜ハラ';}
        if($memory->size === 6){$size = 'ハラ〜ムネ';}
        if($memory->size === 7){$size = 'ムネ〜カタ';}
        if($memory->size === 8){$size = 'カタ〜アタマ';}
        if($memory->size === 9){$size = 'アタマ〜アタマ半';}
        if($memory->size === 10){$size = 'アタマ半〜ダブル';}

        if($memory->w_condition === 1){$w_condition = '面ツル';}
        if($memory->w_condition === 2){$w_condition = 'ザワついている';}
        if($memory->w_condition === 3){$w_condition = 'ジャンク';}
        if($memory->w_condition === 4){$w_condition = 'クローズアウト';}

        if($memory->number === 1){$number = '少ない';}
        if($memory->number === 2){$number = '少な目';}
        if($memory->number === 3){$number = '普通';}
        if($memory->number === 4){$number = '多め';}
        if($memory->number === 5){$number = '多い';}        

        if($memory->state === 1){$state = '切れた波';}
        if($memory->state === 2){$state = '速い波';}
        if($memory->state === 3){$state = 'つながった波';}
        if($memory->state === 4){$state = 'ワイドな波';}
        if($memory->state === 5){$state = 'ダンパー';}
        if($memory->state === 6){$state = 'トロい波';}
        if($memory->state === 7){$state = 'トロ速い波';}
        if($memory->state === 8){$state = 'トロダンパー';}
        if($memory->state === 9){$state = 'ホレた波';}
        if($memory->state === 10){$state = '厚い波';}
        if($memory->state === 11){$state = 'トロ厚い波';}
        if($memory->state === 12){$state = '厚速い波';}
        if($memory->state === 13){$state = '三角波';}
        if($memory->state === 14){$state = 'チューブ';}
        if($memory->state === 15){$state = 'ショアブレイク';}
        if($memory->state === 16){$state = '風波';}
        if($memory->state === 17){$state = 'フラット';}
 
        if($memory->direction === 1){$direction = '北';}
        if($memory->direction === 2){$direction = '北東';}
        if($memory->direction === 3){$direction = '東';}
        if($memory->direction === 4){$direction = '南東';}
        if($memory->direction === 5){$direction = '南';}
        if($memory->direction === 6){$direction = '南西';}
        if($memory->direction === 7){$direction = '西';}
        if($memory->direction === 8){$direction = '北西';}

        if($memory->people === 1){$people = '0人';}
        if($memory->people === 2){$people = '1~5人';}
        if($memory->people === 3){$people = '5~15人';}
        if($memory->people === 4){$people = '16〜30人';}
        if($memory->people === 5){$people = '31〜50人';}
        if($memory->people === 6){$people = '51人〜';}

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
}
