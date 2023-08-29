<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panitia;
use PDF;

class PanitiaController extends Controller
{

    public function index()
    {
        $panitias = Panitia::all();
        return view('panitia.panitia', compact('panitias'));
    }
    public function create()
    {
        return view('panitia.panitia-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_panitia' => 'required',
            'tgl_lahir' => 'required',
        ]);

        Panitia::create([
            'nama_panitia' => $request->nama_panitia,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('/panitia');
    }

    public function edit($id_panitia)
    {
        $panitia = Panitia::find($id_panitia);
        return view('panitia.panitia-edit', compact('panitia'));
    }

    public function update(Request $request, $id_panitia)
    {
        $this->validate($request, [
            'nama_panitia' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $panitia = Panitia::find($id_panitia);

        $panitia->update([
            'nama_panitia' => $request->nama_panitia,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('/panitia');
    }

    public function destroy($id_panitia)
    {
        $panitia = Panitia::find($id_panitia);
        $panitia->delete();
        return redirect('/panitia');
    }

    public function cetak_pdf()
    {
        $panitias = Panitia::all();

        $pdf = PDF::loadview('panitia.panitia-cetak', compact('panitias'));
        return $pdf->download('laporan-panitia.pdf');
    }
}