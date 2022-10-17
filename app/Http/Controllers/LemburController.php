<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Lembur;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('lembur')->get();
        return view('Lembur.Lembur', ['data' => $data]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tambah(Request $request)
    { 
        return view('Lembur.tambahlmbr');

    }
    
    
     public function create(Request $request)
    { 
        $Lembur = Lembur::all();
        return view('Lembur.buatlembur', ['lembur' => $Lembur]);

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
        // $insert = array (
        //     'nama_kry'          => $request->nama_karawan,
        //     'tanggal_lembur'    => $request->tgl,
        //     'nama'              => $request->nm_lengkap,
        //     'mulai_lembur'      => $request->jam_mulai,
        //     'selesai_lembur'    => $request->jam_selesai,
        //     'jumlah'            => $request->terhitung,
        // );

        // dd($insert);

        // DB::table('lembur')->insert($insert);

        // return redirect()->route('lembur.index');

        Lembur::create($request->all());
        return redirect()->route('lembur');
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
        //
        $data = Lembur::find($id);
        $data->delete();
        return redirect()->route('lembur.index');
    }
}
