<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Absensi;
use DB;

class AbsensiController extends Controller
{
    public function index()
    {
        $data = DB::table('Absensi')->get();
        return view('Absensi.Absensi', ['data' => $data]);
    }

    public function create()
    {
        $absensi = Absensi::all();
        return view('Absensi.tambahabs', ['Absensi' => $absensi]);
    }

    public function absensistore(Request $request)
    {
        $insert = array (
           // 'id'             => $request->id,
           'nama'          => $request->nm_karyawan,
           'tgl_absen'     => $request->tgl,
           'jam_masuk'     => $request->jam_masuk,
           'jam_pulang'    => $request->jam_plg,
           'terlambat'     => $request->terlambat,
          'jam_kerja'     => $request->jam_kerja
        );

        //dd($insert);

        DB::table('Absensi')->insert($insert);
        return redirect()->route('absensi.index');
    }

    public function show($id)
    {
        $data = Absensi::find($id);
        //dd($data);
        return view('Absensi.edit',compact('data'));
    }

    public function edit($id)
    {
         /* Cari Data Untuk Di Edit */
         $data = Absensi::find($id);
       
         //return view('absensi.edit');
         return $data;
    }

    public function update(Request $request, $id)
    {
        $update = [
            'nama'          => $request->nm_karyawan,
            'tgl_absen'     => $request->tgl,
            'jam_masuk'     => $request->jam_masuk,
            'jam_pulang'    => $request->jam_plg,
            'terlambat'     => $request->terlambat,
           'jam_kerja'     => $request->jam_kerja
        ];
        User::where('id', $id)->update($update);
        $msg = "User Updated successful! ";
        return redirect('Absensi.index')->with('msg', $msg); 
    }

    public function destroy($id)
    {
        // dd($id);
        $data = Absensi::find($id);
        if($data){
            $message = true;
            $data->delete();
            
        }else{
            $message = false;
        }
        return redirect()->route('absensi.index');
    }
}