@extends('prakerja.template')

@section('title')
 Halaman Edit   
@endsection

@section('content')
<div class="flex justify-between p-5">
    <form action="{{route('prosesedit', $prakerja->id)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="font-bold mb-2">
              Nama
            </label>
            <input type="text" placeholder="Nama" name="nama" value="{{$prakerja->nama}}">
          </div>
          <div class="mb-4">
            <label class="font-bold mb-2">
              Email
            </label>
            <input type="email" placeholder="Email" name="email" value="{{$prakerja->email}}">
          </div>
          <div class="mb-4">
            <label class="font-bold mb-2">
              Telpon
            </label>
            <input type="text" placeholder="Telpon" name="telpon" value="{{$prakerja->telpon}}">
          </div>
          <div class="mb-4">
            <label class="font-bold mb-2">
                Alamat
              </label>
              <textarea name="alamat" id="" cols="30" rows="10">{{$prakerja->alamat}}</textarea>
          </div>
          <div class="mb-4">
            <label class="font-bold mb-2">
                Pendidikan Terakhir
            </label>
            <input type="text" placeholder="Pendidikan Terakhir" name="pendidikan_terakhir" value="{{$prakerja->pendidikan_terakhir}}">
          </div>
          <div class="mb-4">
            <label class="font-bold mb-2">
                foto
            </label>
            <input type="file" placeholder="foto" name="foto">
          </div>

          <button type="submit" class="bg-blue-500 hover:bg-blue-700 rounded-md">Simpan</button>
    </form>
    
@endsection
