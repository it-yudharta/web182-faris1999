@extends('layouts.master')

@section('content')

    <h1>Edit Data Siswa</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
        <div class="row">
        <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select name='jenis_kelamin' class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Agama</label>
                        <select name='agama' class="form-control" id="exampleFormControlSelect1">
                        <option value=Islam @if($siswa->agama == 'Islam') selected @endif>Islam</option>
                        <option value=Kristen @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                        <option value=Hindu @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                        <option value=Budha @if($siswa->agama == 'Budha') selected @endif>Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name='alamat' class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>  
                </div>
        </div>
    @endsection