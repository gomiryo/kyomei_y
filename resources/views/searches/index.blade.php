@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-4">
            <div class="text-center my-4">
                <h3 class="brown border p-2">理想の先生を探す</h3>
            </div>
            {{Form::open(['url' => '/search','method' => 'get'])}}
                <div class="form-group">
                    {{Form::label('text', 'ユーザー名：')}}
                    {{Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => 'お名前'])}}
                </div>
                <div class="form-group">
                    {{Form::label('area', '地域：')}}
                    {{Form::select('area', ['すべて' => 'すべて'] + Config::get('area.chiiki'))}}
                </div>
                <div class="form-group">
                    {{Form::label('attribute', '属性：')}}
                    {{Form::select('attribute', ['すべて' => 'すべて'] + Config::get('attribute.zokusei'))}}
                </div>
                <div class="form-group">
                    {{Form::label('category', 'カテゴリー：')}}
                    {{Form::select('category', ['すべて' => 'すべて'] + Config::get('category.kategori'))}}
                </div>
                {{Form::submit('検索', ['class' => 'btn btn-primary btn-block'])}}
            {{Form::close()}}
        </div>
        <div class="col-sm-8">
            <div class="text-center my-4">
                <h3 class="brown p-2">ユーザ一覧</h3>
            </div>

             <div class="container">
                <!--検索ボタンが押された時に表示されます-->
                @if(!empty($data))
                    <div class="my-2 p-0">
                        <div class="row  border-bottom text-center">
                            <div class="col-sm-3">
                                <p>ユーザー名</p>
                            </div>
                            <div class="col-sm-3">
                                <p>地域名</p>
                            </div>
                            <div class="col-sm-3">
                                <p>属性</p>
                            </div>
                            <div class="col-sm-3">
                                <p>カテゴリー</p>
                            </div>
                        </div>
                        <!-- 検索条件に一致したユーザを表示します -->
                        @foreach($data as $item)
                                <div class="row py-2 border-bottom text-center">
                                    <div class="col-sm-3">
                                        <a href="{{ route('users.index', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                    </div>
                                    <div class="col-sm-3">
                                        {{ $item->area }}
                                    </div>
                                    <div class="col-sm-3">
                                        {{ $item->attribute }}
                                    </div>
                                    <div class="col-sm-3">
                                        {{ $item->category }}
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
                @endif
            </div>
        </div>
    </div>
@endsection