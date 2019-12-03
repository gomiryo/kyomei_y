@extends('layouts.app')

@section('content')
<h2>プロフィール</h2>
<ul>
  <li>アイコン：</li>
  <li>ID番号：{{ $users->id }}</li>
  <li>名前：{{ $users->name }}</li>
  <li>地域：{{ $users->area }}</li>
  <li>属性：{{ $users->attribute }}</li>
  <li>カテゴリー：{{ $users->category }}</li>
  <li>キャッチフレーズ：{{ $users->catch_phrase }}</li>
  <li>プロフィール：{{ $users->profile_text }}</li>
  <li>興味あるもの：{{ $users->interest }}</li>
  <li>サービス：</li>
</ul>
<a href="{{ route('sets.profile', ['id' => $users->id]) }}">
  編集する
</a>
@endsection