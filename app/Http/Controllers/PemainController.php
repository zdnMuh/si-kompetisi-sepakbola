<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use App\Models\Pemain;
use Illuminate\Http\Request;
use PDF;

class PemainController extends Controller
{
    public function index()
    {
        $pemains = Pemain::all();
        return view('pemain.pemain', compact('pemains'));
    }
    public function create()
    {
        $clubs = Klub::all();
        return view('pemain.pemain-entry', compact('clubs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_klub' => 'required',
            'nama_pemain' => 'required',
            'no_punggung' => 'required',
            'posisi' => 'required',
            'tgl_lahir' => 'required',
        ]);

        Pemain::create([
            'id_klub' => $request->id_klub,
            'nama_pemain' => $request->nama_pemain,
            'no_punggung' => $request->no_punggung,
            'posisi' => $request->posisi,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('/pemain');
    }

    public function edit($id_pemain)
    {
        $pemain = Pemain::find($id_pemain);
        $clubs = Klub::all();
        return view('pemain.pemain-edit', compact('pemain', 'clubs'));
    }

    public function update(Request $request, $id_pemain)
    {
        $this->validate($request, [
            'id_klub' => 'required',
            'nama_pemain' => 'required',
            'no_punggung' => 'required',
            'posisi' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $pemain = Pemain::find($id_pemain);

        $pemain->update([
            'id_klub' => $request->id_klub,
            'nama_pemain' => $request->nama_pemain,
            'no_punggung' => $request->no_punggung,
            'posisi' => $request->posisi,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('/pemain');
    }

    public function destroy($id_pemain)
    {
        $pemain = Pemain::find($id_pemain);
        $pemain->delete();
        return redirect('/pemain');
    }

    public function cetak_pdf()
    {
        $pemains = Pemain::all();

        $pdf = PDF::loadview('pemain.pemain-cetak', compact('pemains'));
        return $pdf->download('laporan-pemain.pdf');
    }
}