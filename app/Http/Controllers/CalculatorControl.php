<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalculatorControl extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }
    public function calculate(Request $request)
    {
        $display = $request->input('display', '');
        $button = $request->input('button', '');

        if ($button == 'C') {
            $display = '';
        } elseif ($button == '=') {
            try {
                $display = eval("return $display;");
            } catch (\Exception $e) {
                $display = 'error';
            }
        } else {
            $display .= $button;
        }
        return redirect('/')->with('display', $display);
    }
    //
}
