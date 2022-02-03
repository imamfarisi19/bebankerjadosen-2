<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\kegiatan;
use App\Models\Bebankerja;
use App\Models\Masapenugasan;
use App\Models\Kinerja;
use App\Models\Rekomendasi;

class PengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPengajaran = Dosen::with('kegiatan')->paginate(10);
        return view('Tabel.pengajaran', compact('dtPengajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtPeng = Kegiatan::with('bebanKerja')->paginate(10);
        return view('TabelInput.create-pengajaran', compact('dtPeng'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kegiatan::create([
            'jenis' => $request->jenis,
            'buktiPenugasan' => $request->buktiPenugasan, 
            'sks' => $request->sks, 
            'masaPenugasan' => $request->masaPenugasan, 
            'buktiDokumen' => $request->buktiDokumen,
            'sks' => $request->sks,
            'rekomendasi' => $request->rekomendasi

        ]);
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
        //
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
        //
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
