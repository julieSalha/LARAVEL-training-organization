<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('checkRole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('users', ['users'=>$users]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_user()
    {
        return view('add_user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_user(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->job = $request->job;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users');
    }
}
