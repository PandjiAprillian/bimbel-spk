<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlternativeController extends Controller
{
    public function index()
    {
        $alternatives = Alternative::paginate(5);
        return view("alternative.index", compact("alternatives"));
    }

    public function create()
    {
        return view("alternative.create");
    }

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

    public function show(Alternative $alternative)
    {
        return view('alternative.show', compact('alternative'));
    }

    public function edit(Alternative $alternative)
    {
        return view('alternative.edit', compact('alternative'));
    }

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

        if (is_numeric($request->url)) {
            return redirect()->route("alternatives.show", ['alternative' => $alternative->id])->with("success", "Ubah data alternatif {$request->nama} berhasil!");
        } else {
            return redirect()->route("scores.index")->with("success", "Data nilai altenatif {$request->nama} berhasil diubah!");
        }
    }

    public function destroy(Alternative $alternative)
    {
        $alternative->delete();
        return redirect()->route("alternatives.index")->with("success", "Data alternatif {$alternative->nama} berhasil dihapus!");
    }
}
