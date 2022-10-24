<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        //
        $data = Jabatan::all();
        return view('Jabatan.data',['data' => $data]);
    }

    public function tambahjabatan()
    {
        return view('Jabatan.tambahjabatan');
    }

    public function store(Request $request)
    {
        $insert = array (
            'nama_jabatan'   => $request->nama_golongan,
            'keterangan'   => $request->keterangan
        );

        dd($insert);

        DB::table('golongan')->insert($insert);

        return redirect()->route('golongan.index');
    }

    public function show($id)
    {
        $data = Jabatan::find($id);
        //dd($data);
        return view('Jabatan.edit',compact('data'));
    }

    public function edit($id)
    {
        /* Cari Data Untuk Di Edit */
        $cari = DB::table('golongan')->where('id',$id)->get();
        if(count($cari)){
            $jabatan = DB::table('karyawan')->get();
            return view('golongan.edit', ['golongan' => $jabatan, 'item' => $cari]);
        }else{
            return redirect()->route('golongan.index');
        }
    }

    public function update(Request $request, $id)
    {
        //update data jabatan 
        DB::table('jabatan')->where('golongan_id',$request->id)->update([
            'jabatan' => $request->nama_golongan,
		    'keterangan_jabatan' => $request->keterangan,
        ]);

        //alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }

    public function delete($id)
    {
        //menghapus data jabatan berdasarkan id yang dipilih
        $data = Jabatan::find($id);
        $data->delete();

        //alihkan halaman ke halaman jabatan
        return redirect()->route('golongan.index');
    }
}
