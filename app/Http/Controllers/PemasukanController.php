<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('pemasukan.index',['pemasukan' => pemasukan::get(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            return view ('pemasukan.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'tanggal' => 'required|date',
        ]);
        
        $pemasukan = new pemasukan();
    
        $pemasukan->sumber_pendapatan = $request->Sumber_Pendapatan;
        $pemasukan->status = $request->status;
        $pemasukan->keterangan = $request->keterangan; 
        $pemasukan->price = $request->Nominal;
        $pemasukan->tanggal = date('Y-m-d', strtotime($request->tanggal));    
        $pemasukan->save();
    
        session()->flash('success', 'Data Berhasil Ditambah');
        return redirect()->route('Pemasukan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pemasukan = pemasukan::find($id);
        return view('pemasukan.edit', [
         'pemasukan'=> $pemasukan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        
        $pemasukan = pemasukan::find($id);
    
        $pemasukan->sumber_pendapatan = $request->sumber_pendapatan;
        $pemasukan->status = $request->status; 
        $pemasukan->keterangan = $request->keterangan; 
        $pemasukan->price = $request->price; 
        $pemasukan->tanggal = $request->tanggal;    
    
        $pemasukan->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('Pemasukan.index');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $pemasukan = Pemasukan::find($id);
        $pemasukan->delete();
        session()->flash('info', 'Data Berhasil Dihapus');
        return redirect()->route('Pemasukan.index');
    }
}
