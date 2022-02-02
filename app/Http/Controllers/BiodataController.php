<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Jabatanfungsional;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDosen = Dosen::with('jabfung')->latest()->paginate(10);
        return view('Tabel.biodata', compact('dtDosen'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabFung = Jabatanfungsional::all();
        return view('TabelInput.create-biodata', compact('jabFung'));
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
            'namaDepan' => $request->namaDepan,
            'namaBelakang' => $request->namaBelakang, 
            'email' => $request->email, 
            'jabatan' => $request->jabatan, 
            'tanggalLahir' => $request->tanggalLahir,
            'NIDN' => $request->NIDN,
            'NIP' => $request->NIP, 
            'gelarDepan' => $request->gelarDepan,
            'gelarBelakang' => $request->gelarBelakang,
            'jabatanFungsional_id' => $request->jabatanFungsional_id,
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
        $jabFung = Jabatanfungsional::all();
        $dos = Dosen::with('jabfung')->findorfail($id);

        return view('TabelInput.edit-biodata', compact('dos','jabFung'));
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
        $dos = Dosen::findorfail($id);
        $dos->delete();

        return back()->with('toast_info', 'Data Berhasil Dihapus!');
    }
} 