<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatives = Alternative::all();
        return view("alternative.index", compact("alternatives"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("alternative.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama'       => 'required|min:5',
                'alamat'     => 'required',
                'biaya'      => "required|in:5,4,3,2",
                'akreditasi' => 'required|in:5,3,1',
                'fasilitas'  => 'required|in:1,3,5',
                'pengajar'   => 'required|in:3,4,5'
            ]
        );

        $alternative = Alternative::create(
            [
                'nama' => $request->nama,
                'alamat' => $request->alamat
            ]
        );

        $alternative->score()->create(
            [
                'c1' => $request->biaya,
                'c2' => $request->akreditasi,
                'c3' => $request->fasilitas,
                'c4' => $request->pengajar
            ]
        );

        return redirect()->route('alternatives.index')->with("success", "Data alternatif {$request->nama} berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function show(Alternative $alternative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternative $alternative)
    {
        return view('alternative.edit', compact('alternative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternative $alternative)
    {
        $request->validate(
            [
                'nama'       => 'required|min:5',
                'alamat'     => 'required',
                'biaya'      => "required|in:5,4,3,2",
                'akreditasi' => 'required|in:5,3,1',
                'fasilitas'  => 'required|in:1,3,5',
                'pengajar'   => 'required|in:3,4,5'
            ]
        );

        Alternative::where('id', $alternative->id)->update(
            [
                'nama' => $request->nama,
                'alamat' => $request->alamat
            ]
        );

        $alternative->score()->update(
            [
                'c1' => $request->biaya,
                'c2' => $request->akreditasi,
                'c3' => $request->fasilitas,
                'c4' => $request->pengajar
            ]
        );

        return redirect()->route('scores.index')->with("success", "Ubah data alternatif {$request->nama} berhasil!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternative $alternative)
    {
        //
    }
}
