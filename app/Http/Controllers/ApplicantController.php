<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    //

    public function addApplicant(Request $request){
        $save=Applicant::create($request->all());
        if($save){
                session()->flash('success', 'Form submited successfully');
                return redirect()->back();
        }else{
                session()->flash('error', 'Could not submit');
                return redirect()->back();
        }
    }

    public function login(){
        return redirect()->route('welcome');
    }

    public function register(){
        return redirect()->route('welcome');
    }
}
