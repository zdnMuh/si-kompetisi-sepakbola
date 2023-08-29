<?php

namespace App\Http\Controllers;

use App\Models\Klasmen;
use App\Models\Panitia;
use App\Models\Klub;
use Illuminate\Http\Request;
use PDF;

class KlasmenController extends Controller
{
    public function index()
    {
        $klasmens = Klasmen::all();
        return view('klasmen.klasmen', compact('klasmens'));
    }
    public function create()
    {
        $panitias = Panitia::all();
        $clubs = Klub::all();
        return view(('klasmen.klasmen-entry'), compact('panitias', 'clubs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_panitia' => 'required',
            'id_klub' => 'required',
            'nama_kompetisi' => 'required',
            'hasil' => 'required',
        ]);

        Klasmen::create([
            'id_panitia' => $request->id_panitia,
            'id_klub' => $request->id_klub,
            'nama_kompetisi' => $request->nama_kompetisi,
            'hasil' => $request->hasil,
        ]);

        return redirect('/klasmen');
    }

    public function edit($id_kompetisi)
    {
        $klasmen = Klasmen::find($id_kompetisi);
        $panitias = Panitia::all();
        $clubs = Klub::all();
        return view('klasmen.klasmen-edit', compact('klasmen', 'panitias', 'clubs'));
    }

    public function update(Request $request, $id_kompetisi)
    {
        $this->validate($request, [
            'id_panitia' => 'required',
            'id_klub' => 'required',
            'nama_kompetisi' => 'required',
            'hasil' => 'required',
        ]);

        $klasmen = Klasmen::find($id_kompetisi);

        $klasmen->update([
            'id_panitia' => $request->id_panitia,
            'id_klub' => $request->id_klub,
            'nama_kompetisi' => $request->nama_kompetisi,
            'hasil' => $request->hasil,
        ]);

        return redirect('/klasmen');
    }

    public function destroy($id_kompetisi)
    {
        $klasmen = Klasmen::find($id_kompetisi);
        $klasmen->delete();
        return redirect('/klasmen');
    }

    public function cetak_pdf()
    {
        $klasmens = Klasmen::all();

        $pdf = PDF::loadview('klasmen.klasmen-cetak', compact('klasmens'));
        return $pdf->download('laporan-klasmen.pdf');
    }
}
