<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Training;
use Illuminate\Support\Facades\Hash;

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
     * Go to page add_user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_user()
    {
        return view('add_user');
    }

    /**
     * Create User in database.
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
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users');
    }

    /**
     * Edit an user .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit_user($id)
    {
        $user = User::find($id);
        return view('edit_user', ['user' => $user]);
    }

    /**
     * update the user in database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update_user($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->job = $request->job;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('users');
    }

    /**
     * Delete an user .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }

    /**
     * Show all trainings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function trainings()
    {
        $trainings = Training::with('user')->get();
        return view('trainings', ['trainings'=>$trainings]);
    }

    /**
     * Go to page add_training.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_training()
    {
        $users = User::where('role', 'prof')->get();
        return view('add_training', ['users'=>$users]);
    }

    /**
     * Create User in database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_training(Request $request)
    {
        $training = new Training;
        $training->name = $request->name;
        $training->duration = $request->duration;
        $training->teacher_id = $request->teacher_id;
        $training->save();
        return redirect()->route('trainings');
    }
}
