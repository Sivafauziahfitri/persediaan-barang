<?php

namespace App\Http\Controllers;


use App\Cekbarang;
use Illuminate\Http\Request;

class CekbarangController extends Controller
{
    public function index()
    {
        $cekbarangs = Cekbarang::all();
        return view('cekbarang.index', compact('cekbarangs'));
    }

    public function create()
    {
        $cekbarangs = Cekbarang::all();
        return view('cekbarang.create');
    }

    public function store(Request $request)
    {
        $cekbarangs = Cekbarang::create([
            'kode_barang' => $request->kode_barang,
            'nama_supplier' => $request->nama_supplier,
            'nama_barang' => $request->nama_barang,
            'phone' => $request->phone,
            'stock' => $request->stock,
        ]);

        $cekbarangs->save();
        return redirect('cekbarang.index');
    }
}