<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use DB;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = cuti::all();

        return view('Cuti.cuti',['data' => $data]);
    }


    public function tambah(Request $request)
    { 

        $data = DB::table('karyawan')->get();
        return view('Cuti.tambahcuti', ['data'=> $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = cuti::all();
        return view('Cuti.tambahcuti', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $insert = array (
            'id'            => $request->id,
            'nama_karyawan'          => $request->nm_karyawan,
            'tanggal_mulai' => $request->tgl_mulai,
            'tgl_selesai'   => $request->tgl_selesai,
            'jumlah'        => $request->jmlh_cuti,
            'status'        => '1',
            'keterangan'    => $request->ket,
        );

        // dd($insert);

        DB::table('cuti')->insert($insert);

        return redirect()->route('cuti');
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
        $data = Cuti::find($id);
        if($data){
            $message = true;
            $data->delete();
            
        }else{
            $message = false;
        }
        return redirect()->route('cuti.index');
    }
<<<<<<< HEAD
    }
=======
    }
>>>>>>> 700f97ff9d6eccad7dfad6a60c5972229c0ab33d
