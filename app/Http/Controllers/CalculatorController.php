<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $result;
    public function calculatorPage(){
        return view('backend.calculator.index');
    }

    public function calculatorResult(Request $request){
        switch ($request->operator){
            case '+' : $this->result = $request->first_number + $request->last_number;
            break;
            case '-' : $this->result = $request->first_number - $request->last_number;
            break;
            case '*' : $this->result = $request->first_number * $request->last_number;
            break;
            case '/' : $this->result = $request->first_number / $request->last_number;
            break;
            case '%' : $this->result = $request->first_number % $request->last_number;
            break;
        }

        return back()->with([
            'first_number'      => $request->first_number,
            'last_number'       => $request->last_number,
            'result'            => $this->result,
        ]);
    }
}
