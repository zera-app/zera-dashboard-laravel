<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Tables\Users;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use ProtoneMedia\Splade\SpladeTable;

class UserController extends Controller
{
    public function index()
    {
        return view('user.testing.index', [
            'users' => Users::class
        ]);
    }
}
