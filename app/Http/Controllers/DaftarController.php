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
        

        $adminGambar = array();
        $dosenGambar = array();
        foreach ($dtDaftar as $item)
        {
            $adminGambar[] = isset($item->admin['gambar']) ? $item->admin['gambar'] : '';
            $dosenGambar[] = isset($item->dosen['gambar']) ? $item->dosen['gambar'] : '';            
        }
        
        return view('AdminRegistration.daftar', compact('dtDaftar', 'adminGambar', 'dosenGambar'));
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
        $dtUser = User::with('dosen', 'admin')->findorfail($id);        
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        $dtDaftar = User::with('dosen', 'admin')->paginate(100);

        return view('AdminRegistration.edit-daftar', compact('dtDosen','dtAdmin','dtUser','jabFung','dtDaftar'));
    }

    public function editAdmin($id)
    {
        $jabFung = Jabatanfungsional::all();
        $dtUser = User::with('dosen', 'admin')->findOrFail($id);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        //dd($dtUser[0]->admin['namaDepan']);
        return view('AdminRegistration.edit-admin-daftar', compact('dtDosen','dtAdmin','dtUser','jabFung'));
    }

    public function editUser($id)
    {
        $jabFung = Jabatanfungsional::all();
        $dtUser = User::with('dosen', 'admin')->findOrFail($id);
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        return view('AdminRegistration.edit-user-daftar', compact('dtDosen','dtAdmin','dtUser','jabFung'));
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

    public function updateAdmin(Request $request, $id)
    {
        $jabFung = Jabatanfungsional::all();
        $dtDosen = Dosen::all();
        $dtAdmin = Admin::all();
        $dtUser = User::with('dosen', 'admin')->findOrFail($id);
        $dtUser->update($request->all());
        return redirect('daftar')->with('toast_success', 'Data berhasil diperbarui');
    }

    public function updateUser(Request $request, $id)
    {
        $dtUser = User::with('dosen', 'admin')->findOrFail($id);
        $a = $request['namaDepan']." ".$request['namaBelakang'];    
        $request['name'] = $a;
        $dtU = [
            'dosen_id' => $request['dosen_id'],
            'admin_id' => $request['admin_id'],
            'name' => $request['name'],
            'level' => $request['level'],
            'username' => $request['username'],
            'password' => $request['password'],
        ];
        $dtUser->update($dtU);
        
        $dtDosen = Dosen::findOrFail($request->dosen_id);
        $awal = $dtDosen->gambar;
        $dtD = [
            'namaDepan' => $request['namaDepan'],
            'namaBelakang' => $request['namaBelakang'],
            'email' => $request['email'],
            'tanggalLahir' => $request['tanggalLahir'],
            'NIDN' => $request['NIDN'],
            'NIP' => $request['NIP'],
            'gelarDepan' => $request['gelarDepan'],
            'gelarBelakang' => $request['gelarBelakang'],
            'jabatanFungsional_id' => $request['jabatanFungsional_id'],
            'golongan' => $request['golongan'],
            'gambar' => $awal
        ];
        $request->gambar->move(public_path().'/img',$awal);
        $dtDosen->update($dtD);

        return redirect('daftar')->with('toast_success', 'Data berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = User::with('dosen', 'admin')->findorfail($id);
        $user->delete();
        $user->dosen->delete();

        return back()->with('toast_info', 'Data Berhasil Dihapus!');
    }
}


        // if(isset($_POST['submit'])) 
        // {
        //     $file = $_FILES['file'];

        //     $fileName = $_FILES['file']['name'];
        //     $fileTmpName = $_FILES['file']['tmp_name'];
        //     $fileSize = $_FILES['file']['size'];
        //     $fileError = $_FILES['file']['error'];
        //     $fileType = $_FILES['file']['type'];

        //     $fileExt = explode('.', $fileName);
        //     $fileActualExt = strtolower(end($fileExt));
        //     $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        //     if(in_array($fileActualExt, $allowed)) 
        //     {
        //         if($fileError === 0)
        //         {
        //             if($fileSize < 1000000)
        //             {
        //                 $fileNameNew = uniqid('', true).".".$fileActualExt;
        //                 $fileDestination = public_path('/img/');
        //                 move_uploaded_file($fileTmpName, $fileDestination);
        //             } 
        //             else
        //             {
        //               back()->with('toast_info', 'file anda terlalu besar!');  
        //             }
        //         }
        //         else
        //         {
        //             back()->with('toast_info', 'error saat mengupload file!');
        //         }
        //     }
        //     else
        //     {
        //         back()->with('toast_info', 'tidak dapat mengunduh dari tipe file ini!');
        //     }
            
        // }
