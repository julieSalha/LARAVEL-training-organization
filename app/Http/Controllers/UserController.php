<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Session;
use App\Grade;
use App\Report;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('checkUserRole');
    }

    /**
     * Show the all trainings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trainings = Training::all();
        return view('trainings', ['trainings'=>$trainings]);
    }

    /**
     * Show sessions of a training.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function session()
    {
        $training = Training::find($id);
        $sessions = Session::where('training_id', $id)->get();
        return view('sessions', ['sessions'=>$sessions], ['training'=>$training]);
    }

    /**
     * Subscribe to a session.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subscribe_to_a_session(Request $request, $user_id, $session_id)
    {
        $session = Session::find($session_id);
        // $session->availables_seats = 
        $grade = new Grade;
        $grade->user_id = $request->$user_id;
        $grade->session_id = $request->$session_id;
        $grade->save();
        return redirect()->route('trainings');
    }

    // /**
    //  * Show passed sessions of a training.
    //  * 
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function passed_session()
    // {
    //    
    // }

    // /**
    //  * Show sessions to come of a training.
    //  * 
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function passed_session()
    // {

    // }
}
