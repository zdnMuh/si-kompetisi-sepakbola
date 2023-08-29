<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Klub;
use App\Models\Klasmen;
use App\Models\Panitia;
use PDF;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.transaksi', compact('transaksis'));
    }
    public function create()
    {
        $clubs = Klub::all();
        $transaksis = Transaksi::all();
        $klasmens = Klasmen::all();
        $panitias = Panitia::all();
        return view('transaksi.transaksi-entry', compact('clubs', 'transaksis', 'klasmens', 'panitias'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_panitia' => 'required',
            'id_klub' => 'required',
            'id_kompetisi' => 'required',
            'j_pembayaran' => 'required',
        ]);

        Transaksi::create([
            'id_panitia' => $request->id_panitia,
            'id_klub' => $request->id_klub,
            'id_kompetisi' => $request->id_kompetisi,
            'j_pembayaran' => $request->j_pembayaran,
        ]);

        return redirect('/transaksi');
    }

    public function edit($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $clubs = Klub::all();
        $klasmens = Klasmen::all();
        $panitias = Panitia::all();
        return view('transaksi.transaksi-edit', compact('transaksi', 'clubs', 'klasmens', 'panitias'));
    }

    public function update(Request $request, $id_transaksi)
    {
        $this->validate($request, [
            'id_panitia' => 'required',
            'id_klub' => 'required',
            'id_kompetisi' => 'required',
            'j_pembayaran' => 'required',
        ]);

        $transaksi = Transaksi::find($id_transaksi);

        $transaksi->update([
            'id_panitia' => $request->id_panitia,
            'id_klub' => $request->id_klub,
            'id_kompetisi' => $request->id_kompetisi,
            'j_pembayaran' => $request->j_pembayaran,
        ]);

        return redirect('/transaksi');
    }

    public function destroy($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->delete();
        return redirect('/transaksi');
    }

    public function cetak_pdf()
    {
        $transaksis = Transaksi::all();

        $pdf = PDF::loadview('transaksi.transaksi-cetak', compact('transaksis'));
        return $pdf->download('laporan-transaksi.pdf');
    }
}
