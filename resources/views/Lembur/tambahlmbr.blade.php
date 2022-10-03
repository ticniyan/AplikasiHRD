<<<<<<< HEAD
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form lembur</h5>
            <hr>
            <form action="">
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama karyawan</label>
                    <div class="col-xs-10">
                        <input type="text" name="nm_karawan" id="nama" class="form-control" placeholder="Nama ..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl" class="col-xs-2 col-form-label text-capitalize">tanggal</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl" id="ttl" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-xs-2 col-form-label">Jam Mulai</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="time" name="jam_mulai" id="example-time-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-xs-2 col-form-label">Jam Selesai</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="time" name="jam_selesai" id="example-time-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="terhitung" class="col-xs-2 col-form-label text-capitalize">terhitung</label>
                    <div class="col-xs-10">
                        <input type="text" name="terhitung" id="terhitung" class="form-control" required>
                    </div>
                </div>
               {{-- <div class="form-group row">
                    <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="jabatan" id="jabatan">
                            <option selected>Jabatan</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->nama_golongan}}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>--}}
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
=======
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form lembur</h5>
            <hr>
            <form action="">
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama karyawan</label>
                    <div class="col-xs-10">
                        <input type="text" name="nm_karawan" id="nama" class="form-control" placeholder="Nama ..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl" class="col-xs-2 col-form-label text-capitalize">tanggal</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl" id="ttl" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-xs-2 col-form-label">Jam Mulai</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="time" name="jam_mulai" id="example-time-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-xs-2 col-form-label">Jam Selesai</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="time" name="jam_selesai" id="example-time-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="terhitung" class="col-xs-2 col-form-label text-capitalize">terhitung</label>
                    <div class="col-xs-10">
                        <input type="text" name="terhitung" id="terhitung" class="form-control" required>
                    </div>
                </div>
               {{-- <div class="form-group row">
                    <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="jabatan" id="jabatan">
                            <option selected>Jabatan</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->nama_golongan}}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>--}}
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
>>>>>>> 911f53627e1311e3a3cd4fe23e5743fc6f78bc62
