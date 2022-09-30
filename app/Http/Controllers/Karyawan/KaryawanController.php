<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Jabatan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('karyawan')->get();
        return view('karyawan.datakry', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan = Jabatan::all();
        return view('karyawan.tambah', ['jabatan' => $jabatan]);
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
            'nip'   => $request->nip,
            'nik'   => $request->nik,
            'nama'  => $request->nm_lengkap,
            'jenis_kelamin' => $request->radio,
            'tempat_lahir'  => $request->tmp_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'telpon'        => $request->tlpn,
            'email'         => $request->email,
            'status_nikah'  => $request->status,
            'alamat'        => $request->alamat,
            'golongan_id'   => $request->jabatan
        );

        // dd($insert);

        DB::table('karyawan')->insert($insert);

        return redirect()->route('karyawan.index');
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
        /* Cari Data Untuk Di Edit */
        $cari = DB::table('karyawan')->where('id',$id)->get();
        if(count($cari)){
            $jabatan = DB::table('golongan')->get();
            return view('karyawan.edit', ['jabatan' => $jabatan, 'item' => $cari]);
        }else{
            return redirect()->route('karyawan.index');
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
        $data = Karyawan::find($id);
        $data->delete();
        return redirect()->route('karyawan.index');
    }
}
