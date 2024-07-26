<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
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


    public function mysearch(): View
    {
        return view('searchdemo');
    }

    public function autocomplete(Request $request): JsonResponse
    {
        $data = User::select("name")
                    ->where('name', 'LIKE', '%'. $request->get('query'). '%')
                    ->take(10)
                    ->get();

        return response()->json($data);
    }



}
