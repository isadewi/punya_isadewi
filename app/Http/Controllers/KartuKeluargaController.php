<?php

namespace App\Http\Controllers;


use App\Models\KartuKeluarga;

use Illuminate\Http\Request;
use App\Models\Jorong;

class KartuKeluargaController extends Controller
{
    
    public function index()
    {
         
            $kk = KartuKeluarga::latest()-> paginate(10);
           return view('kk.index',compact('kk'))
           ->with('i', (request()->input('page', 1) - 1) * 10);

    }

   
    public function create()
    {
         $jorong = \App\Models\Jorong::all();


        return view('kk.create',
            [
                'jorong'       => $jorong,

            ]);
    }

    
  
    public function store(Request $request, KartuKeluarga $kk )
    {
           // melakukan validasi data
         $request->validate([
          'no'=> 'required',
          'jorong_id'=> 'required',
          'tanggal_pencatatan'=> 'required',
        ]);




         //fungsi untuk menambah data
         KartuKeluarga::create($request->all());


         //jika data berhasil ditambahkan , akan kembali ke halaman utama

         return redirect('kk')
            -> with('success', 'Data Kartu Keluarga Berhasil Ditembahkan');





    }

   
    public function show($id)
    {
       //menampilkan detail data dengan menggunakan id

        $kk = KartuKeluarga::find($id);
        return view('kk.show', compact('kk')); 
    }

    public function edit(KartuKeluarga  $kk )

    {   
         $jorong = Jorong::all();
         return view('kk/edit', compact('kk','jorong'));
           
    }

   
    public function update(Request  $kk, $id)
    {
         // melakukan validasi data

      $kk-> validate([
          'no'    => 'required',
          'jorong_id'                 => 'required',
          'tanggal_pencatatan'                  => 'required',

        ]);


        // untu mengupdate data inputan 
        KartuKeluarga::find($id)->update($kk->all());


        //jika berhasil, kembali ke halaman utama

        return redirect('kk')
        -> with('Data Kartu Keluarga berhasil diupdate');
    }

   
    public function destroy($id)
    {
         //fungsi untuk menghapus data

       KartuKeluarga::find($id)->delete();
         return redirect()->route('kk.index')-> with('Data Kartu Keluarga berhasil dihapus');
    }
}
