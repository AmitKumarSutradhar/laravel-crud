<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    protected $fullName;
    public function fullName(){
        return view('backend.full-name.index');
    }

    public function getFullName(Request $request){
        $this->fullName = $request->first_name . " " . $request->last_name;
        return back()->with([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'result'            => $this->fullName,
        ]);
    }
}
