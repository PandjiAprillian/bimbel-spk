<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WeightController extends Controller
{
    public function index()
    {
        $weight = Weight::first();
        return view("weight.index", compact('weight'));
    }

    public function update(Request $request, Weight $weight)
    {
        $weightValidate = $request->validate(
            [
                'w1' => 'required|numeric',
                'w2' => 'required|numeric',
                'w3' => 'required|numeric',
                'w4' => 'required|numeric',
            ]
        );

        $weight->update($weightValidate);
        return redirect()->route("weights.index")->with("success", "Data bobot berhasil diupdate!");
    }
}
