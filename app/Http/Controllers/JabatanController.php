<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Jabatan::all();

        return view('Jabatan.data',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jabatan.tambahjabatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $insert = array (
            'nama_jabatan'   => $request->nama_golongan,
            'keterangan_jabatan'   => $request->keterangan,
            'nama'  => $request->nm_lengkap,
            'golongan_id'   => $request->jabatan
        );

        // dd($insert);

        DB::table('Jabatan')->insert($insert);

        return redirect()->route('Jabatan.index');
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
         /* Cari Data Untuk Di Edit */
        $cari = DB::table('golongan')->where('id',$id)->get();
        if(count($cari)){
            $jabatan = DB::table('karyawan')->get();
            return view('golongan.edit', ['golongan' => $jabatan, 'item' => $cari]);
        }else{
            return redirect()->route('golongan.index');
        }
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
        //update data jabatan 
        DB::table('jabatan')->where('golongan_id',$request->id)->update([
            'jabatan' => $request->nama_golongan,
		    'keterangan_jabatan' => $request->keterangan,
        ]);

        //alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data jabatan berdasarkan id yang dipilih
        DB::table('golongan')->where('golongan_id', $id)->delete();

        //alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }
}
