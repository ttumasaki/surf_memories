@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @foreach($values as $value)
                <div class="card-header">確認ポイント:{{$value->point}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    確認日時
                    {{$value->date}}<br>
                    波のサイズ
                    {{$value->size}}<br>
                    面の状況
                    {{$value->w_condition}}<br>
                    波数
                    {{$value->number}}<br>
                    波の状態
                    {{$value->state}}<br>
                    風の向き
                    {{$value->direction}}<br>
                    人数
                    {{$value->people}}<br>
                    水温
                    {{$value->temperature}}<br>
                    波の画像・動画
                    {{$value->image}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection