<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard(Request $request)
    {
        $userCount = User::count();
        return view('dashboard', compact('userCount'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function users(Request $request)
    {

        $users = User::paginate(10);
        return view('users', compact('users'));
        $userCount = User::count();
    }
}
