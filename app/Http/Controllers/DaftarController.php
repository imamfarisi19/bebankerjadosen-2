<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Admin;
use App\Models\jabatanfungsional;
use App\Models\Uploadgambar;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDaftar = User::with('dosen', 'admin')->paginate(100);
        $dtGambar = Uploadgambar::all();

        $adminGambar = array();
        $dosenGambar = array();
        foreach ($dtDaftar as $item)
        {
            $adminGambar[] = isset($item->admin['gambar']) ? $item->admin['gambar'] : '';
            $dosenGambar[] = isset($item->dosen['gambar']) ? $item->dosen['gambar'] : '';            
        }
        
        return view('AdminRegistration.daftar', compact('dtDaftar', 'dtGambar', 'adminGambar', 'dosenGambar'));
        // $data1 = isset($dtDaftar->dosen['id']) ? $dtDaftar->dosen['id'] : '';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabFung = Jabatanfungsional::all();
        $dtUser = User::with('dosen', 'admin')->paginate(100);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        return view('AdminRegistration.create-daftar', compact('dtDosen','dtAdmin','dtUser', 'jabFung'));
    }

    public function createUser()
    {
        $jabFung = Jabatanfungsional::all();
        $dtUser = User::with('dosen', 'admin')->paginate(100);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        return view('AdminRegistration.user-daftar', compact('dtDosen','dtAdmin','dtUser', 'jabFung'));
    }

    public function createAdmin()
    {
        $jabFung = Jabatanfungsional::all();
        $dtUser = User::with('dosen', 'admin')->paginate(100);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        return view('AdminRegistration.admin-daftar', compact('dtDosen','dtAdmin','dtUser', 'jabFung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->level=="User"){
            $gambar = $request->gambar;
            $namaGambar = time().rand(100,999).".".$gambar->getClientOriginalExtension();
            $gambar->move(public_path().'/img', $namaGambar);

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
               'gambar' => $namaGambar,
            ]);
        }

        if($request->level=="Admin"){
            $gambar = $request->gambar;
            $namaGambar = time().rand(100,999).".".$gambar->getClientOriginalExtension();
            $gambar->move(public_path().'/img', $namaGambar);
            Admin::create([
                'namaDepan' => $request->namaDepan,
                'namaBelakang' => $request->namaBelakang,
                'email' => $request->email,
                'jabatan' => $request->jabatan,
                'tanggalLahir' => $request->tanggalLahir,
                'gambar' => $namaGambar,
            ]);
        }

        $a = $request->namaDepan;
        $b = $request->namaBelakang;
        $c = array($a, $b);
        $d = join(' ', $c);

        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();

        $dosenId = $request->dosen_id;
        $adminId = $request->admin_id;
        $numDosenId = count($dtDosen);
        $numAdminId = count($dtAdmin);

        $enc1 = $request->password;
        $enc2 = bcrypt($enc1);
        
        if($dosenId=="1"&&$adminId=="0"){
            User::create([
                'admin_id' => null,
                'dosen_id' => $numDosenId,
                'name' => $d,
                'level' => $request->level, 
                'email' => $request->email,
                'password' => $enc2
            ]);
        }else if($dosenId=="0"&&$adminId=="1"){
            User::create([
                'admin_id' => $numAdminId,
                'dosen_id' => null,
                'name' => $d,
                'level' => $request->level, 
                'email' => $request->email,
                'password' => $enc2
            ]);
        }else{}

        return redirect('daftar')->with('toast_success', 'Data berhasil tersimpan!');
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
        $dtUser = User::with('dosen', 'admin')->paginate(100);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        $dtDaftar = User::with('dosen', 'admin')->paginate(100);

        return view('AdminRegistration.edit-daftar', compact('dtDosen','dtAdmin','dtUser','jabFung','dtDaftar'));
    }

    public function editAdmin($id)
    {
        $jabFung = Jabatanfungsional::all();
        $dtUser = User::with('dosen', 'admin')->paginate(100);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        //dd($dtUser[0]->admin['namaDepan']);
        return view('AdminRegistration.edit-admin-daftar', compact('dtDosen','dtAdmin','dtUser','jabFung'));
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
        $dos = User::findorfail($id);
        $dos->delete();

        return back()->with('toast_info', 'Data Berhasil Dihapus!');
    }
}
