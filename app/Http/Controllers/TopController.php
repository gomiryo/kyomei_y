<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
	public function index()
	{
		$users = User::all();

		return view('tops/index', [
			'users' => $users,
		]);
	}
}