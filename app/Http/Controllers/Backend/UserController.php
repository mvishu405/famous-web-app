<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.user.index')->with('users', User::orderBy('created_at', 'desc')->get());
    }

    public function edit($id)
    {
        return view('backend.user.edit')->with('user', User::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::findOrfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = $request->password;
        }
        $user->save();
        return redirect()->route('backend.users.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }
}
