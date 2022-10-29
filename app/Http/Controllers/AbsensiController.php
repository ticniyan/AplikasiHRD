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

    public function store(Request $request)
    {
        $insert = array (
            'karyawan_id'   => $request->karyawan_id,
            'nama'          => $request->nama,
            'tgl_absen'     => $request->tgl_absen,
            'jam_masuk'     => $request->jam_masuk,
            'jam_pulang'    => $request->jam_pulang,
            'jam_kerja'     => $request->jam_kerja,
            'terlambat'     => $request->terlambat
        );

        //dd($insert);

        DB::table('Absensi')->insert($insert);

        return redirect()->route('Absensi.index');
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
            'karyawan_id'   => $request->karyawan_id,
            'nama'          => $request->nama,
            'tgl_absen'     => $request->tgl_absen,
            'jam_masuk'     => $request->jam_masuk,
            'jam_pulang'    => $request->jam_pulang,
            'jam_kerja'     => $request->jam_kerja,
            'terlambat'     => $request->terlambat
        ];
        User::where('id', $id)->update($update);
        $msg = "User Updated successful! ";
        return redirect('Absensi.index')->with('msg', $msg); 
    }

    public function destroy($id)
    {
        //menghapus data jabatan berdasarkan id yang dipilih
        $data = absensi::find($id);
        $data-> delete();
        
        //alihkan halaman ke halaman jabatan
        return redirect()->route('Absensi.index');
    }
}
