<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Laravelの構築方法
Route::get('laravel', function () {
    return '<html><body><h1>Laravelの作り方</h1><p>①web.phpでルーティング設定する<br>②コントローラーを作成する<br>③マイグレーションファイルを作成&実行する(テーブルの設計書)<br>④モデルクラスを作成する<br>⑤コントローラーにロジックを入力する<br>⑥Bladeテンプレートエンジンを作成する</p></body></html>';
});

Route::get('/', 'TopController@index')->name('tops.index');
	// ログインしてないとトップページに遷移できない
	// ->middleware('auth');

Auth::routes();

// 理想の先生を探す
Route::get('search', 'SearchController@index')->name('searches.index');
// ユーザーのプロフィールを見る
Route::get('user/{id}', 'UserController@index')->name('users.index');
// ユーザーのプロフィールを編集する
Route::get('member/set/profile', 'SetController@index')->name('sets.profile');
Route::post('member/set/profile', 'SetController@profileEdit')->name('sets.profileEdit');
Route::post('member/set/profile', 'SetController@profileUpdate')->name('sets.profileUpdate');

// TwitterAPIログイン機能
Route::get('auth/twitter', 'TwitterController@redirectToProvider');
Route::get('auth/twitter/callback', 'TwitterController@handleProviderCallback');
Route::get('auth/twitter/logout', 'TwitterController@logout');