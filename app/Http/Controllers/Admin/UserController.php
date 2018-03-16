<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\User;
use App\Models\UserRole;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $data = [
            'users' => $users,
        ];
        return view('admins.users.index', $data);
    }

    public function create()
    {
        $id = Auth::user()->id;
        $users = User::all();
        $departments = Department::all();
        $user_roles = UserRole::where('user_id', $id)->get();
        $data = [
            'users' => $users,
            'departments' => $departments,
            'user_roles' => $user_roles,
        ];
        return view('admins.users.create', $data);
    }

    public function store(NewUserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admins.users.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $departments = Department::all();
        $user_roles = UserRole::where('user_id', $user->id)->get();
        $data = [
            'user' => $user,
            'departments' => $departments,
            'user_roles' => $user_roles,
        ];
        return view('admins.users.show', $data);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $departments = Department::all();
        $user_roles = UserRole::where('user_id', $user->id)->get();
        $data = [
            'user' => $user,
            'departments' => $departments,
            'user_roles' => $user_roles,
        ];
        return view('admins.users.edit', $data);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password,
            'address' => $request->address,
            'birthday' => $request->birthday,
        ]);
        $user->save();
        return redirect()->route('admins.users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
