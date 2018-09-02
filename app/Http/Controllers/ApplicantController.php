<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\General;
use App\Http\Requests\storeApplicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Monarobase\CountryList\CountryList;

class ApplicantController extends Controller
{
    //
    public function index()
    {
        $countryList=new CountryList();
        if(Session::get('locale')=='fr'){
            $countries=$countryList->getList('fr','php');
        }else{
            $countries=$countryList->getList('en','php');
        }

        return view('apply', ["Countries"=>$countries]);
    }
    public function store(storeApplicant $request){
        //dd($request);
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();
        //dd($validated);
        $applicant= new Applicant;
        $applicant->first_name=$validated["first_name"];
        $applicant->last_name=$validated["last_name"];
        $applicant->type=$validated["type"];
        if($applicant->type=='student'){
            $applicant->university=$validated["university"];
            $applicant->level_study_and_last_diploma=$validated["school_level_and_last_diploma"];
            $applicant->reason_for_join=General::getEnumValues('applicants','reason_for_join')[ $validated["reasonforjoin1"]];
        }else{
            $applicant->company=$validated["company"];
            $applicant->function=$validated["function"];
            $applicant->reason_for_join=General::getEnumValues('applicants','reason_for_join')[ $validated["reasonforjoin2"]];
            $applicant->other_reason=$validated["otherreason"];
        }


        $applicant->phone_number=$validated["phone"];
        $applicant->nationality=$validated["nationality"];
        $applicant->email=$validated["email"];

        $applicant->save();
        $request->session()->flash('success', trans('apply.addsuccess')." ".$applicant->last_name);
        //dd($request->session());
        $countryList=new CountryList();
        if(Session::get('locale')=='fr'){
            $countries=$countryList->getList('fr','php');
        }else{
            $countries=$countryList->getList('en','php');
        }

        return view('apply', ["Countries"=>$countries]);
    }
}
