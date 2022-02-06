<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\kegiatan;
use App\Models\Bebankerja;
use App\Models\Masapenugasan;
use App\Models\Kinerja;
use App\Models\Pengajaran;
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
        $dtPengajaran= Pengajaran::with('dosen', 'kegiatan', 'masaPenugasan', 'rekomendasi')->paginate(100);
        return view('Tabel.pengajaran', compact('dtPengajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtPengajaran = Pengajaran::all();
        $dtDosen = Dosen::all();
        $dtKegiatan = Kegiatan::all();
        $dtMasaPenugasan = Masapenugasan::all();
        $dtRekomendasi = Rekomendasi::all();
        
        return view('TabelInput.create-pengajaran', 
        compact(
            'dtPengajaran',
            'dtDosen',
            'dtKegiatan',
            'dtMasaPenugasan',
            'dtRekomendasi'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Pengajaran::create([
            'dosen_id' => $request->dosen_id,
            'kegiatan_id'=>$request->kegiatan_id,
            'masaPenugasan_id'=> $request->masaPenugasan_id,
            'rekomendasi_id' => $request->rekomendasi_id,
            'buktiPenugasan' => $request->buktiPenugasan,
            'sksBK' => $request->sksBK,
            'buktiDokumen' => $request->buktiDokumen,
            'sksBD' => $request->sksBD,
        ]);

        return redirect('pengajaran')->with('toast_success', 'Data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
