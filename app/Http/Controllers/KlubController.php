<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use PDF;

use Illuminate\Http\Request;

class KlubController extends Controller
{
    public function index()
    {
        $clubs = Klub::all();
        return view('klub.klub', compact('clubs'));
    }
    public function create()
    {
        return view('klub.klub-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_klub' => 'required',
            'asal_klub' => 'required',
            'julukan_klub' => 'required',
            'no_telp' => 'required',
        ]);

        Klub::create([
            'nama_klub' => $request->nama_klub,
            'asal_klub' => $request->asal_klub,
            'julukan_klub' => $request->julukan_klub,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/klub');
    }

    public function edit($id_klub)
    {
        $klub = Klub::find($id_klub);
        return view('klub.klub-edit', compact('klub'));
    }

    public function update(Request $request, $id_klub)
    {
        $this->validate($request, [
            'nama_klub' => 'required',
            'asal_klub' => 'required',
            'julukan_klub' => 'required',
            'no_telp' => 'required',
        ]);

        $klub = Klub::find($id_klub);

        $klub->update([
            'nama_klub' => $request->nama_klub,
            'asal_klub' => $request->asal_klub,
            'julukan_klub' => $request->julukan_klub,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/klub');
    }

    public function destroy($id_klub)
    {
        $klub = Klub::find($id_klub);
        $klub->delete();
        return redirect('/klub');
    }

    public function cetak_pdf()
    {
        $clubs = Klub::all();

        $pdf = PDF::loadview('klub.klub-cetak', compact('clubs'));
        return $pdf->download('laporan-klub.pdf');
    }
}