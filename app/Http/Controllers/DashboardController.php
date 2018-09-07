<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->user()->hasRole('applicant')){return redirect('/');}
        $request->user()->authorizeRoles(['admin']);

        $applicants=Applicant::all();
        return view('dashboard',['applicants'=>$applicants]);
    }
}
