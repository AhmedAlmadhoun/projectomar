<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('type', 'user')->get();
        return view('admin.user', compact('users'));
    }
    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $user->type = 'off';
        $user->save();

        return redirect()->route('admin.user');
    }

}
