<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $values = $request->session()->get('values', false);
        return view('deltek.index')->with(['values' => $values]);
    }

    public function process(Request $request)
    {
        # Validate
        $request->validate([
           'main' => 'required'
        ]);

        $data = $request->main;
        $explodeData = array_map('intval', explode(' ', $data));
        asort($explodeData);
        //var_dump($explodeData); exit();

        return redirect('/')->with(['values' => $explodeData]);

    }
}
