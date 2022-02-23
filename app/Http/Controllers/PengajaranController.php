<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\Dosen;
use App\Models\kegiatan;
use App\Models\Bebankerja;
use App\Models\Masapenugasan;
use App\Models\Kinerja;
use App\Models\Pengajaran;
use App\Models\Rekomendasi;
use App\Models\Periode;
use App\Models\Tahunajaran;
use App\Models\Semester;
use App\Models\Asesor;
use App\Models\Namaasesor;

class PengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPengajaran= Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->paginate(100);
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
        Periode::create([
            'dosen_id' => $request->dosen_id,
            'tahunAjaran_id' => $request->tahunAjaran_id,
            'semester_id' => $request->semester_id,
        ]);

        $dtPeriode = Periode::latest()->get();
        $a = $dtPeriode->last();
        $b = $a->id;

        Bebankerja::create([
            'buktiPenugasan' => $request->buktiPenugasan,
            'sks' => $request->sksBP,
        ]);

        $dtBebanKerja = Bebankerja::latest()->get();
        $c = $dtBebanKerja->last();
        $d = $c->id;

        Kinerja::create([
            'buktiDokumen' => $request->buktiDokumen,
            'sks' => $request->sksBD,
        ]);

        $dtKinerja = Kinerja::latest()->get();
        $e = $dtKinerja->last();
        $f = $e->id;

        $rekom = 2;
        if($rekom < 12)
        {
            $x = 2;
        }
        else
        {
            $x = 1;
        }
        Pengajaran::create([
            'dosen_id' => $request->dosen_id,
            'periode_id' => $b,
            'kegiatan_id'=>$request->kegiatan_id,
            'masaPenugasan_id'=> $request->masaPenugasan_id,
            'rekomendasi_id' => $x,
            'bebanKerja_id' => $d,
            'kinerja_id' => $f,
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
        $dtPengajaran = Pengajaran::all();
        $dtDosen = Dosen::all();
        $dtKegiatan = Kegiatan::all();
        $dtMasaPenugasan = Masapenugasan::all();
        $dtRekomendasi = Rekomendasi::all();

        $findPengajaran = Pengajaran::with('dosen','kegiatan','masaPenugasan','rekomendasi')->findorfail($id);
        return view('TabelInput.edit-pengajaran', compact(
            'findPengajaran',
            'dtPengajaran',
            'dtDosen',
            'dtKegiatan',
            'dtMasaPenugasan',
            'dtRekomendasi'
        ));
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
        $pengajaran = Pengajaran::findorfail($id);
        $a = $request->buktiPenugasan;
        $b = $request->buktiDokumen;

        if($a == null && $b != null){
            return back()->with('toast_info', 'mohon upload bukti penugasan !');
        }else if($b == null && $a != null){
            return back()->with('toast_info', 'mohon upload bukti dokumen !');
        }else if($a == null && $b == null){
            return back()->with('toast_info', 'mohon upload bukti penugasan dan bukti dokumen!');
        }else{}
        $pengajaran->update($request->all());
        
        return redirect('pengajaran')->with('toast_success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dos = Pengajaran::findorfail($id);
        $dos->delete();

        return back()->with('toast_info', 'Data Berhasil Dihapus!');
    }

    public function tahun()
    {
        $dtPeriode = Periode::with('tahunAjaran', 'semester')->paginate(100);
        $dtTahunAjaran = Tahunajaran::all(); 
        $dtSemester = Semester::all(); 
        return view('TabelInput.tahun-pengajaran', compact('dtPeriode','dtTahunAjaran', 'dtSemester'));
    }

    public function tampilTahun(Request $createTahun)
    {
        $dtTahunAjaran = $createTahun->tahunAjaran_id;
        $dtSemester = $createTahun->semester_id;
        $dtDosen = auth()->user()->dosen_id;

        $a = DB::select('select * from periode where dosen_id = ? and tahunAjaran_id = ? and semester_id = ?', [$dtDosen, $dtTahunAjaran, $dtSemester]);    

        if($a == null)
        {
            Periode::create([
                'dosen_id' => $dtDosen,
                'tahunAjaran_id' => $dtTahunAjaran,
                'semester_id' => $dtSemester,
            ]);

            $a = DB::select('select * from periode where dosen_id = ? and tahunAjaran_id = ? and semester_id = ?', [$dtDosen, $dtTahunAjaran, $dtSemester]);

            $t = [];
            foreach($a as $item)
            {
                $i = DB::select('select * from pengajaran where periode_id = ?',[$item->id]);
                $sks = DB::table('pengajaran')->select('bebankerja_id')->where('periode_id','=',$item->id)->get();
                foreach($sks as $item)
                {
                    $total = DB::select('select * from bebankerja where id = ?',[$item->bebankerja_id]);
                    foreach($total as $item)
                    {
                        $t[] = $item->sks;
                    }
                }
            }

            $sksBK = 0.0;
            foreach($t as $item)
            {
                $sksBK = $item + $sksBK;
            }

            $dtPengajaran = [];
            foreach ($i as $item)
            {
                if($item != null)
                {
                    $dtPengajaran[] = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->where('id','=',$item->id)->paginate(100);    
                }
                else
                {
                    $dtPengajaran = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->paginate(100);    
                }
            }
            return view('Tabel.pengajaran', compact('dtPengajaran', 'a', 'sksBK'));
        }
        else
        {
            $tBK = [];
            $tBD = [];
            foreach($a as $item)
            {
                $i = DB::select('select * from pengajaran where periode_id = ?',[$item->id]);
                $sksBK = DB::table('pengajaran')->select('bebankerja_id')->where('periode_id','=',$item->id)->get();
                $sksBD = DB::table('pengajaran')->select('kinerja_id')->where('periode_id','=',$item->id)->get();            

                foreach($sksBK as $item)
                {
                    $totalBK = DB::select('select * from bebankerja where id = ?',[$item->bebankerja_id]);
                    foreach($totalBK as $item)
                    {
                        $tBK[] = $item->sks;
                         
                    }
                }

                foreach($sksBD as $item)
                {
                    $totalBD = DB::select('select * from kinerja where id = ?',[$item->kinerja_id]);
                    foreach($totalBD as $item)
                    {
                        $tBD[] = $item->sks;        
                    }
                }   
            }

            $sksBK = 0.0;
            foreach($tBK as $item)
            {
                $sksBK = $item + $sksBK;
                if($sksBK >= 9)
                {
                    $sksBK = 9 * 1.00;
                }
            }

            $sksBD = 0.0;
            foreach($tBD as $item)
            {
                $sksBD = $item + $sksBD;
                if($sksBD >= 9)
                {
                    $sksBD = 9 * 1.00;
                }
            }

            if($sksBK < 12 && $sksBD < 12)
            {
                $rek = 2;
            }
            else
            {
                $rek = 1;
            }

            $rekomen = DB::select('select * from rekomendasi where id = ?', [2]);
            $rekomendasi = $rekomen[0]->keterangan;

            $dtPengajaran = [];
            foreach ($i as $item)
            {
                if($item != null)
                {
                    $dtPengajaran[] = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->where('id','=',$item->id)->paginate(100);    
                }
                else
                {
                    $dtPengajaran = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->paginate(100);    
                }
            }
            return view('Tabel.pengajaran', compact('dtPengajaran', 'a', 'sksBK', 'sksBD', 'rekomendasi'));
        }
    }

    public function createTahun(Request $createTahun)
    {
        $dtPengajaran = Pengajaran::all();
        $dtDosen = Dosen::all();
        $dtKegiatan = Kegiatan::all();
        $dtMasaPenugasan = Masapenugasan::all();
        $dtRekomendasi = Rekomendasi::all();
        $dtBebanKerja = Bebankerja::all();
        $dtKinerja = Kinerja::all();
        
        $dtPeriodeEnkripsi = $createTahun->periode_id;
        if($dtPeriodeEnkripsi != null)
        {
            $dtPeriode =  Crypt::decryptString($dtPeriodeEnkripsi);
        }       
        
        return view('TabelInput.create-pengajaran',
        compact(
            'dtPengajaran',
            'dtDosen',
            'dtKegiatan',
            'dtMasaPenugasan',
            'dtRekomendasi',
            'dtBebanKerja',
            'dtKinerja',
            'dtPeriode'
        ));
    }

    public function storeTahun(Request $request)
    {
        Bebankerja::create([
            'buktiPenugasan' => $request->buktiPenugasan,
            'sks' => $request->sksBP,
        ]);
   
        $dtBebanKerja = DB::table('bebankerja')->select('id')->latest()->first();
        $bebanKerja_id = $dtBebanKerja->id;

        Kinerja::create([
            'buktiDokumen' => $request->buktiDokumen,
            'sks' => $request->sksBD,
        ]);

        $dtKinerja = DB::table('kinerja')->select('id')->latest()->first();
        $kinerja_id = $dtKinerja->id;

        $tempSksBK = $request->sksBP;
        $tempSksBD = $request->sksBD;
        $sksBK = number_format($tempSksBK, 3);
        $sksBD = number_format($tempSksBD, 3);

        if($sksBK < 12 && $sksBD < 12)
        {
            $x = 2;
        }
        else
        {
            $x = 1;
        }
        Pengajaran::create([
            'dosen_id' => $request->dosen_id,
            'periode_id' => $request->periode_id,
            'kegiatan_id'=>$request->kegiatan_id,
            'masaPenugasan_id'=> $request->masaPenugasan_id,
            'rekomendasi_id' => $x,
            'bebanKerja_id' => $bebanKerja_id,
            'kinerja_id' => $kinerja_id,
        ]);

        return redirect('tahun-pengajaran')->with('toast_success', 'Data berhasil tersimpan!');
    }

    public function editTahun($id)
    {
        $dtPengajaran = Pengajaran::all();
        $dtKegiatan = Kegiatan::all();
        $dtMasaPenugasan = Masapenugasan::all();
        $dtRekomendasi = Rekomendasi::all();
        $dtBebanKerja = Bebankerja::all();
        $dtKinerja = Kinerja::all();

        $findPengajaran = Pengajaran::with('periode','kegiatan','masaPenugasan','rekomendasi','bebanKerja','kinerja')->findorfail($id);

        return view('TabelInput.edit-pengajaran', compact(
            'findPengajaran',
            'dtPengajaran',
            'dtKegiatan',
            'dtMasaPenugasan',
            'dtRekomendasi',
            'dtBebanKerja',
            'dtKinerja'
        ));
    }

    public function updateTahun(Request $request, $id)
    {
        $pengajaran = Pengajaran::findorfail($id);
        $bebanKerja = Bebankerja::findorfail($pengajaran->bebanKerja_id);
        $kinerja = Kinerja::findorfail($pengajaran->kinerja_id);        

        $a = $request->buktiPenugasan;
        $b = $request->buktiDokumen;
        
        if($a == null && $b != null){
            return back()->with('toast_info', 'mohon upload bukti penugasan !');
        }else if($b == null && $a != null){
            return back()->with('toast_info', 'mohon upload bukti dokumen !');
        }else if($a == null && $b == null){
            return back()->with('toast_info', 'mohon upload bukti penugasan dan bukti dokumen!');
        }else{}

        $pengajaran->update($request->all());

        $bebanKerja->update([
            'buktiPenugasan' => $request->buktiPenugasan,
            'sks' => $request->sksBP
        ]);

        $kinerja->update([
            'buktiDokumen' => $request->buktiDokumen,
            'sks'=>$request->sksBD
        ]);
        
        return redirect('tahun-pengajaran')->with('toast_success', 'Data berhasil diperbarui');
    }

    public function destroyTahun($id)
    {
        $dos = Pengajaran::findorfail($id);
        $dos->delete();

        return redirect('tahun-pengajaran')->with('toast_info', 'Data Berhasil Dihapus!');
    }

    public function tahunAsesor()
    {
        $dtPeriode = Periode::with('tahunAjaran', 'semester')->paginate(100);
        $dtTahunAjaran = Tahunajaran::all(); 
        $dtSemester = Semester::all(); 
        return view('TabelInput.tahun-pengajaran-asesor', compact('dtPeriode','dtTahunAjaran', 'dtSemester'));
    }

    public function tampilTahunAsesor(Request $createTahun)
    {
        $dtTahunAjaran = $createTahun->tahunAjaran_id;
        $dtSemester = $createTahun->semester_id;
        $dtDosen = auth()->user()->dosen_id;

        $a = DB::select('select * from periode where dosen_id = ? and tahunAjaran_id = ? and semester_id = ?', [$dtDosen, $dtTahunAjaran, $dtSemester]);
        foreach($a as $item)
        {
            $as = DB::select('select * from asesor where periode_id = ?', [$item->id]);
        }
        $asNama = Asesor::with('nama', 'periode')->get();        
        return view('Tabel.asesor', compact('asNama','a'));
    }

    public function createTahunAsesor(Request $createTahun)
    {
        $dtAsesor = Asesor::with('periode','nama')->paginate(100);
        $dtNama = Namaasesor::all();

        $dtPeriodeEnkripsi = $createTahun->periode_id;
        if($dtPeriodeEnkripsi != null)
        {
            $dtPeriode =  Crypt::decryptString($dtPeriodeEnkripsi);
        }       
        
        return view('TabelInput.create-asesor',
        compact(
            'dtAsesor',
            'dtNama',
            'dtPeriode'
        ));
    }

    public function storeTahunAsesor(Request $request)
    {        
        Asesor::create([
            'nama_id' => $request->nama_id,
            'periode_id' => $request->periode_id,
        ]);

        return redirect('tahun-asesor')->with('toast_success', 'Data berhasil tersimpan!');
    }

    public function editTahunAsesor($id)
    {
        $findAsesor = Asesor::with('periode','nama')->findorfail($id);
        $dtNama = Namaasesor::all();

        return view('TabelInput.edit-asesor', compact(
            'findAsesor',
            'dtNama'
        ));
    }

    public function updateTahunAsesor(Request $request, $id)
    {
        $dtAsesor = Asesor::findorfail($id);
        $dtAsesor->update($request->all());

        return redirect('tahun-asesor')->with('toast_success', 'Data berhasil diperbarui');
    }

    public function destroyTahunAsesor($id)
    {
        $dtAsesor = Asesor::findorfail($id);
        $dtAsesor->delete();

        return redirect('tahun-asesor')->with('toast_info', 'Data Berhasil Dihapus!');
    }
}

/*
     $a = DB::select('select * from periode where dosen_id = ? and tahunAjaran_id = ? and semester_id = ?', [$dtDosen, $dtTahunAjaran, $dtSemester]);    

        if($a == null)
        {
            Periode::create([
                'dosen_id' => $dtDosen,
                'tahunAjaran_id' => $dtTahunAjaran,
                'semester_id' => $dtSemester,
            ]);

            $a = DB::select('select * from periode where dosen_id = ? and tahunAjaran_id = ? and semester_id = ?', [$dtDosen, $dtTahunAjaran, $dtSemester]);

            $t = [];
            foreach($a as $item)
            {
                $i = DB::select('select * from pengajaran where periode_id = ?',[$item->id]);
                $sks = DB::table('pengajaran')->select('bebankerja_id')->where('periode_id','=',$item->id)->get();
                foreach($sks as $item)
                {
                    $total = DB::select('select * from bebankerja where id = ?',[$item->bebankerja_id]);
                    foreach($total as $item)
                    {
                        $t[] = $item->sks;
                    }
                }
            }

            $sksBK = 0.0;
            foreach($t as $item)
            {
                $sksBK = $item + $sksBK;
            }

            $dtPengajaran = [];
            foreach ($i as $item)
            {
                if($item != null)
                {
                    $dtPengajaran[] = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->where('id','=',$item->id)->paginate(100);    
                }
                else
                {
                    $dtPengajaran = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->paginate(100);    
                }
            }
            return view('Tabel.pengajaran', compact('dtPengajaran', 'a', 'sksBK'));
        }
        else
        {
            $tBK = [];
            $tBD = [];
            foreach($a as $item)
            {
                $i = DB::select('select * from pengajaran where periode_id = ?',[$item->id]);
                $sksBK = DB::table('pengajaran')->select('bebankerja_id')->where('periode_id','=',$item->id)->get();
                $sksBD = DB::table('pengajaran')->select('kinerja_id')->where('periode_id','=',$item->id)->get();            

                foreach($sksBK as $item)
                {
                    $totalBK = DB::select('select * from bebankerja where id = ?',[$item->bebankerja_id]);
                    foreach($totalBK as $item)
                    {
                        $tBK[] = $item->sks;
                         
                    }
                }

                foreach($sksBD as $item)
                {
                    $totalBD = DB::select('select * from kinerja where id = ?',[$item->kinerja_id]);
                    foreach($totalBD as $item)
                    {
                        $tBD[] = $item->sks;        
                    }
                }   
            }

            $sksBK = 0.0;
            foreach($tBK as $item)
            {
                $sksBK = $item + $sksBK;
                if($sksBK >= 9)
                {
                    $sksBK = 9 * 1.00;
                }
            }

            $sksBD = 0.0;
            foreach($tBD as $item)
            {
                $sksBD = $item + $sksBD;
                if($sksBD >= 9)
                {
                    $sksBD = 9 * 1.00;
                }
            }

            if($sksBK < 12 && $sksBD < 12)
            {
                $rek = 2;
            }
            else
            {
                $rek = 1;
            }

            $rekomen = DB::select('select * from rekomendasi where id = ?', [2]);
            $rekomendasi = $rekomen[0]->keterangan;

            $dtPengajaran = [];
            foreach ($i as $item)
            {
                if($item != null)
                {
                    $dtPengajaran[] = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->where('id','=',$item->id)->paginate(100);    
                }
                else
                {
                    $dtPengajaran = Pengajaran::with('periode', 'kegiatan', 'masaPenugasan', 'rekomendasi', 'bebanKerja', 'kinerja')->paginate(100);    
                }
            }
            
        }
     */