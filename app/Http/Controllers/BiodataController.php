<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDosen = Dosen::all();
        return view('Tabel.biodata', compact('dtDosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TabelInput.create-biodata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Dosen::create([
            'id' => $request->id,
            'namaDepan' => $request->namaDepan,
            'namaBelakang' => $request->namaBelakang, 
            'email' => $request->email, 
            'jabatan' => $request->jabatan, 
            'tanggalLahir' => $request->tanggalLahir,
            'NIDN' => $request->NIDN,
            'NIP' => $request->NIP, 
            'gelarDepan' => $request->gelarDepan,
            'gelarBelakang' => $request->gelarBelakang,
            'jabatanFungsional' => $request->jabatanFungsional,
            'golongan' => $request->golongan,
            
        ]);
        
        return redirect('biodata')->with('toast_success', 'Data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dos = Dosen::findorfail($id);
        return view('TabelInput.edit-biodata', compact('dos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dos = Dosen::findorfail($id);
        $dos->update($request->all());
        return redirect('biodata')->with('toast_success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
