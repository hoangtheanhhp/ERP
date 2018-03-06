<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\NewUserRequest;
use Illuminate\Http\Request;
use App\User;
=======
use App\Absence;
use Illuminate\Http\Request;
>>>>>>> master

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
        $users = User::all();
        $data = [
            'users' => $users,
=======
        $users = User::all();
        $data = [
          'users' => $users,
>>>>>>> master
        ];
        return view('users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('users.create');
=======
        //
>>>>>>> master
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(NewUserRequest $request)
    {
        //
        User::create($request->all());
        return redirect()->route('users.index');
=======
    public function store(Request $request)
    {
        //
>>>>>>> master
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $user = User::findOrFail($id);
        $data = [
            'user' => $user,
        ];
        return view('users.show',$data);
=======
        //
>>>>>>> master
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
