<<<<<<< HEAD
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form cuti karyawan</h5>
            <hr>
            <form action="{{route('cutistore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama karyawan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="nm_karyawan" id="nama">
                            <option selected>Karyawan</option>
                            @foreach ($data as $item)
                                <option value="{{$item->nama}}">{{$item->nama}}</option> 
                            @endforeach 
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal mulai</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_mulai" id="tglmulai" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal selesai</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_selesai" id="tglselesai" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">jumlah cuti</label>
                    <div class="col-xs-10">
                        <input type="text" name="jmlh_cuti" id="jumlah" class="form-control" placeholder="1 hari.." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-xs-2 col-form-label text-capitalize">Keterangan</label>
                    <div class="col-xs-10">
                        <textarea class="form-control" name="ket" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
               {{--   <div class="form-group row">
                    <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="jabatan" id="jabatan">
                            <option selected>Jabatan</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->nama_golongan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
                {{-- <div class="form-group row">
                    <label for="foto" class="col-xs-2 col-form-label text-capitalize">Foto</label>
                    <div class="col-xs-10">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="https://www.gravatar.com/avatar/ec5c95a0bbaf89f6b9b82b9bb289b13f?d=mm&amp;s=250"/>
                                <input type="hidden" name="hiddenImage" value="default.jpg">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail">
                            </div>
                            <div>
                            <span class="btn default btn-file">
                                <span class="fileinput-new">
                                    Select image </span>
                                <span class="fileinput-exists">
                                    Change </span>
                                <input type="file" name="profileImage">
                            </span>
                                <a href="#" class="btn btn-sm red fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
            <h5 class="text-capitalize">form cuti karyawan</h5>
            <hr>
            <form action="{{route('cutistore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama karyawan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="nm_karyawan" id="nama">
                            <option selected>Karyawan</option>
                            @foreach ($data as $item)
                                <option value="{{$item->nama}}">{{$item->nama}}</option> 
                            @endforeach 
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal mulai</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_mulai" id="tglmulai" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal selesai</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_selesai" id="tglselesai" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">jumlah cuti</label>
                    <div class="col-xs-10">
                        <input type="text" name="jmlh_cuti" id="jumlah" class="form-control" placeholder="1 hari.." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-xs-2 col-form-label text-capitalize">Keterangan</label>
                    <div class="col-xs-10">
                        <textarea class="form-control" name="ket" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
               {{--   <div class="form-group row">
                    <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="jabatan" id="jabatan">
                            <option selected>Jabatan</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->nama_golongan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
                {{-- <div class="form-group row">
                    <label for="foto" class="col-xs-2 col-form-label text-capitalize">Foto</label>
                    <div class="col-xs-10">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="https://www.gravatar.com/avatar/ec5c95a0bbaf89f6b9b82b9bb289b13f?d=mm&amp;s=250"/>
                                <input type="hidden" name="hiddenImage" value="default.jpg">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail">
                            </div>
                            <div>
                            <span class="btn default btn-file">
                                <span class="fileinput-new">
                                    Select image </span>
                                <span class="fileinput-exists">
                                    Change </span>
                                <input type="file" name="profileImage">
                            </span>
                                <a href="#" class="btn btn-sm red fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
>>>>>>> 700f97ff9d6eccad7dfad6a60c5972229c0ab33d
