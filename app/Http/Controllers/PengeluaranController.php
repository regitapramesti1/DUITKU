<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;

class pengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('pengeluaran.index',['pengeluaran' => pengeluaran::get(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            return view ('pengeluaran.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|date',
        ]);
        
        $pengeluaran = new pengeluaran();
    
        $pengeluaran->pendapatan = $request->Pendapatan;
        $pengeluaran->keterangan = $request->keterangan; 
        $pengeluaran->nominal = $request->Nominal;
        $pengeluaran->date = date('Y-m-d', strtotime($request->tanggal));    
        $pengeluaran->save();
    
        session()->flash('success', 'Data Berhasil Ditambah');
        return redirect()->route('pengeluaran.index');
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
        $pengeluaran = pengeluaran::find($id);
        return view('pengeluaran.edit', [
         'pengeluaran'=> $pengeluaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        
        $pengeluaran = pengeluaran::find($id);
    
        $pengeluaran->pendapatan = $request->pendapatan;
        $pengeluaran->keterangan = $request->keterangan; 
        $pengeluaran->nominal = $request->nominal; 
        $pengeluaran->date = $request->date;    
    
        $pengeluaran->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('pengeluaran.index');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $pengeluaran = pengeluaran::find($id);
        $pengeluaran->delete();
        session()->flash('info', 'Data Berhasil Dihapus');
        return redirect()->route('pengeluaran.index');
    }
}
