@extends('layouts.app')

@section('content')
<div class="container">
    <form method='GET' action="{{route('memories.create')}}">
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
                <li class="list-group-item">人数 : {{$memory->people}}</li>
                <li class="list-group-item">波の画像・動画 : {{$memory->image}}</li>
                <li class="list-group-item">
                </li>
            @endforeach
</ul>



            <!-- <div class="card">

                <div class="card-header"></div>

                <div class="card-body"> -->

                    
                <!-- </div>
            </div>
        </div> -->
    </div>
</div>
@endsection