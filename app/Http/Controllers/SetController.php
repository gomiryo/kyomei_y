<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SetController extends Controller
{
	public function index(Request $request)
	{
		$users = User::find($request->id);
		$areas = config('area.chiiki');

		return view('sets.profile', [
            'users' => $users,
            'areas' => $areas,
        ]);
	}

	public function profileEdit(Request $request)
	{
		$users = User::find($request->id);

		return view('sets.profileEdit', [
            'users' => $users,
        ]);
	}

	public function profileUpdate(Request $request)
	{
		$users = User::find($request->id);
		$form = $request->all();
		unset($form['_token']);
		$users->fill($form)->save();
		// 編集したユーザーの個別プロフィールページに飛ばしたい
		return redirect('/');
	}
}
