<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdmainController extends Controller
{
    //
    public function advisors(){
        $advisors = User::where( 'role','=','user')->get();
        return view('admainIndex', compact('advisors'));
    }
}
