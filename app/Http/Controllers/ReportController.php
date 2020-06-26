<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Report;
use App\Session;
use App\Teacher;

class ReportController extends Controller
{
    /**
     * Show the report of a session.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $report = Report::find($id);
        return view('report', ['report'=>$report]);
    }
}
