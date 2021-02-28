@extends('layouts.app')

@section('content')
<div class="container">
    <form method='GET' action="{{route('memories.create')}}">
    @csrf
        <button type='submit' class='btn btn-primary'>波情報を登録</button>
    </form>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <ul class="list-group">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @foreach($memories as $memory)
                <li class="list-group-item active" aria-current="true">確認ポイント : {{$memory->point}}</li>
                <li class="list-group-item">確認日時 : {{$memory->date}}</li>
                <li class="list-group-item">波のサイズ : {{$size}}</li>
                <li class="list-group-item">面の状況 : {{$w_condition}}</li>
                <li class="list-group-item">波数 : {{$number}}</li>
                <li class="list-group-item">波の状態 : {{$state}}</li>
                <li class="list-group-item">風の向き : {{$direction}}</li>
                <li class="list-group-item">人数 : {{$people}}</li>
                <!-- <li class="list-group-item">波の画像・動画 : {{$memory->image}}</li> -->
                <li class="list-group-item">
                    <form action="{{ route('memories.edit',['id' => $memory->id ])}}" method="GET">
                    @csrf
                     <input type="submit" class="btn btn-secondary" value="変更する">
                    </form>
                    <form action="{{ route('memories.destroy',['id' => $memory->id ])}}" method="POST" id="delete_{{$memory->id}}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{$memory->id}}" onclick="deletePost(this);">削除する</a>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
// 削除ボタンを押した際に確認メッセージが出る様に設定

function deletePost(e){
    'use strict';
    if(confirm('本当に削除していいですか？')){
        document.getElementById('delete_'+ e.dataset.id).submit();
    }
}
</script>

@endsection