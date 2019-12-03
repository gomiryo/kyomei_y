@extends('layouts.app')

@section('content')
<h2>プロフィール編集</h2>
<ul>
  <form action="{{ route('sets.profileUpdate', $users->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $users->id }}">
  <li>アイコン：</li>
  <li>ID番号：{{ $users->id }}</li>
  <li>名前：<input type="text" name="name" value="{{ $users->name }}"></li>
  <li>地域：<select>
  @foreach($areas as $area)
  <option value="{{ $users->area }}">{{ $area }}</option>
  @endforeach
  </select></li>
  <li>地域：<input type="text" name="area" value="{{ $users->area }}"></li>
  <li>属性：<input type="text" name="attribute" value="{{ $users->attribute }}"></li>
  <li>カテゴリー：<input type="text" name="category" value="{{ $users->category }}"></li>
  <li>キャッチフレーズ：<input type="text" name="catch_phrase" size="50" value="{{ $users->catch_phrase }}"></li>
  <li>プロフィール：<input type="text" name="profile_text" size="150" value="{{ $users->profile_text }}"></li>
  <li>興味あるもの：<input type="text" name="interest" value="{{ $users->interest }}"></li>
  <li>サービス：</li>
  <input type="submit" value="編集する">
  </form>
</ul>
@endsection