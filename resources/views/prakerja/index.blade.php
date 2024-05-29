@extends('prakerja.template')

@section('title')
 Halaman Prakerja   
@endsection

@section('content')
<div class="flex justify-between">
    <div class="">
        Daftar Prakerja
        <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 rounded-md">Tambah Data</a>
    </div>
</div>
<table>
    <thead>
        <tr class="bordered mt-5 bg-sky-300 text-white w-full">
            <th>Nama</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Pendidikan Terakhir</th>
            <th>Foto User</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prakerja as $a)
        <tr>
                <td>{{$a->nama}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->telpon}}</td>
                <td>{{$a->alamat}}</td>
                <td>{{$a->pendidikan_terakhir}}</td>
                <td><img src="{{asset('foto/'.$a->foto)}}" alt="" width="100px" height="100px"></td>
                <td>
                    <a href="{{route('edit', $a->id)}}" class="bg-yellow-700 p-3 hover:bg-yellow-500 text-white">Edit</a>
                    <a href="{{route('hapus', $a->id)}}" class="bg-red-700 p-3 hover:bg-red-500 text-white">Hapus</a>
                </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
