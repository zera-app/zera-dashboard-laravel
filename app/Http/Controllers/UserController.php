<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class UserController extends Controller
{
    public function index()
    {
        $data = SpladeTable::for(User::class)
            ->column('name', sortable: true, searchable: true)
            ->column('email', sortable: true, searchable: true)
            ->column('created_at', sortable: true)
            ->column('edit')
            ->searchInput('email')
            ->withGlobalSearch('name')
            ->selectFilter('email', [
                '.com' => '.com',
                '.net' => '.net'
            ])
            ->paginate(5);

        return view('user.testing.index', [
            'users' => $data,
        ]);
    }
}
