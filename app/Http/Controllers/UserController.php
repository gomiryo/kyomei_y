<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(int $id)
    {
        $users = User::find($id);

        return view('users/index', [
            'users' => $users,
        ]);
    }
}