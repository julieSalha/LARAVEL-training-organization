<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Training;
use App\Session;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
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
   // public function index()
   // {

   // }

    /**
     * Show all trainings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function trainings()
    {
        $trainings = Training::all();
        return view('users', ['trainings'=>$trainings]);
    }

    /**
     * Show sessions of a training.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sessions($id)
    {
        $training = Training::find($id);
        $sessions = Session::where('training_id', $id)->get();
        return view('sessions', ['sessions'=>$sessions], ['training'=>$training]);
    }
}
