<?php

namespace App\Http\Controllers;

use App\Tables\Users;

class UserController extends Controller
{
    public function index()
    {
        return view('user.testing.index', [
            'users' => Users::class
        ]);
    }
}
