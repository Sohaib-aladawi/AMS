<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdmainController extends Controller
{
    //
    public function advisors(Request $request)
    {
        if (request(['search']) ?? false) {
            $advisors = User::where('role', '=', 'user')
                ->filter(request(['search']))
                ->get();
        } else {
            $advisors = User::where('role', '=', 'user')->get();
        }

        return view('admainIndex', compact('advisors'));
    }
}
