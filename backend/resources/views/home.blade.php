@extends('layouts.app')

@section('content')


<div class="container mt-2">
    <div class="jumbotron py-5">
      <h1 class="display-4">Kisekiとは？</h1>
      <p class="lead">
        目標達成のための日々の頑張り(軌跡)を記録するアプリです。
    　</p>
      <hr class="my-4">
      <p>使い方はいたってシンプル</p>
      <div class="mb-4">
        <div>1. 目標と目標達成に向けて継続したい時間を登録する</div>
        <div>2. 日々の軌跡と継続時間を記録する</div>
        <div>3. 目標時間に到達したらクリア。次の目標を登録しよう！</div>
      </div>
      <p>まずはユーザー登録して目標を登録してみよう！</p>
      <a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">ユーザー登録</a>
    </div>
</div>

@include('layouts.flash')

<div class="container">
  @include('efforts.search')
  @foreach($efforts as $effort) 
    @include('efforts.card')
  @endforeach
  {{ $efforts->links()}}
</div>


@endsection
