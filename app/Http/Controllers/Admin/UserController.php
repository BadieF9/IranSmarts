<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $admins = User::all()->where('level', 'admin')->sortByDesc('name');
        $customers = User::all()->where('level', 'user')->sortByDesc('name');
        return view('Admin.users',[
          'admins' => $admins,
          'customers' => $customers
        ]);
    }

    public function info(User $user)
    {
        return view('Admin.users-info', $user);
    }

    public function destroy(User $user)
    {

    }
}
