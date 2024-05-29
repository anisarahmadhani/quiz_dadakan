<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditPrakerjaRequest;
use App\Http\Requests\InputPrakerjaRequest;
use App\Models\Prakerja;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use illuminate\Support\Facades\File;

class PrakerjaController extends Controller
{
    public function index(){
        $data ['prakerja'] = Prakerja::get();
        return view('prakerja.index', $data);
    }

    public function tambah(){
        return view('prakerja.tambah');
    }

    public function prosestambah(InputPrakerjaRequest $r){
        if($r->validated()){
            
            //cara menyimpan file
            $foto = $r->foto->getClientOriginalName();
            //memindahkan ke dalam public
            $r->foto->move('foto/',$foto);

            Prakerja::CREATE([
                'nama' => $r->nama,
                'email' => $r->email,
                'telpon' => $r->telpon,
                'alamat' => $r->alamat,
                'pendidikan_terakhir' => $r->pendidikan_terakhir,
                'foto' => $foto,
            ]);
        }
        return redirect('prakerja');
    }

    public function edit($id){
        $data ['prakerja'] = Prakerja::where('id',$id)->first();
        return view('prakerja.edit', $data);
    }

    public function prosesedit(EditPrakerjaRequest $r, $id){
        if($r->validated()){
            if($r->foto){
                //cek keadaan foto
                $cek = Prakerja::where('id', $id)->first();
                if(File::exists('foto/'.$cek->foto)){
                    File::delete('foto/'.$cek->foto);
                }
                //cara menyimpan file
                $foto = $r->foto->getClientOriginalName();
                //memindahkan ke dalam public
                $r->foto->move('foto/',$foto);

                $data['foto'] = $foto;
            }

            $data['nama'] = $r->nama;
            $data['email'] = $r->email;
            $data['telpon'] = $r->telpon;
            $data['alamat'] = $r->alamat;
            $data['pendidikan_terakhir'] = $r->pendidikan_terakhir;

            Prakerja::where('id', $id)->update();
            return redirect('prakerja');

        }
    }

    public function hapus($id){
        Prakerja::where('id', $id)->delete();
        return back();
    }
}
