<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;
use App\Models\Penduduk;


class PendudukController extends Controller
{
  
    public function index()
    {
         $penduduks = penduduk::latest()-> paginate(5);
           return view('penduduks.index',compact('penduduks'))
           ->with('i', (request()->input('page', 1) - 1) * 5);


    }

    public function create()
    {

        $kartukeluarga = \App\Models\KartuKeluarga::all();
        $levelpendidikan = \App\Models\LevelPendidikan::all();
        $pekerjaan = \App\Models\Pekerjaan::all();
        $kewarganegaraan = \App\Models\Kewarganegaraan::all();


        return view('penduduks.create', compact('kartukeluarga','levelpendidikan','pekerjaan','kewarganegaraan'));
            
    }

    public function store(Request $request, Penduduk $item )
    {
        // melakukan validasi data
        $request->validate([
          'kartu_keluarga_id'=>'required',
          'nama'=> 'required',
          'nik'=> 'required',
          'tempat_lahir'=> 'required',
          'tanggal_lahir'=> 'required',
          'agama'=> 'required',
          'jenis_kelamin'=> 'required',
          'level_pendidikan_id'=>'required',
           'pekerjaan_id'=> 'required',
           'status_pernikahan'=> 'required',
           'status_keluarga'=> 'required',
           'kewarganegaraan_id'=>'required',
           'ayah'=> 'required',
           'ibu'=> 'required',

        ]);

         //fungsi untuk menambah data
         Penduduk::create($request->all());


         //jika data berhasil ditambahkan , akan kembali ke halaman utama

         return redirect('penduduks')
            -> with('success', 'Data Penduduk Berhasil Ditembahkan');

    }

    public function show($id)
    {
        //menampilkan detail data dengan menggunakan id

        $penduduk = Penduduk::find($id);
        return view('penduduks.show',compact('penduduk'));
    }


    public function edit(Penduduk $penduduk)
    {

        $kartukeluarga = KartuKeluarga::all();
        $levelpendidikan = LevelPendidikan::all();
        $pekerjaan =Pekerjaan::all();
        $kewarganegaraan = Kewarganegaraan::all();

        return view('penduduks/edit', compact('penduduk','kartukeluarga','levelpendidikan','pekerjaan','kewarganegaraan'));
    }

  

    public function update(Request  $penduduk, $id)
    {
        // melakukan validasi data

      $penduduk-> validate([
          'kartu_keluarga_id'    => 'required',
          'nama'                 => 'required',
          'nik'                  => 'required',
          'tempat_lahir'         => 'required',
          'tanggal_lahir'        => 'required',
          'agama'                => 'required',
          'jenis_kelamin'        => 'required',
          'level_pendidikan_id'  =>'required',
           'pekerjaan_id'        => 'required',
           'status_pernikahan'   => 'required',
           'status_keluarga'     => 'required',
           'kewarganegaraan_id'  =>'required',
           'ayah'                => 'required',
           'ibu'                 => 'required',

        ]);


        // untu mengupdate data inputan 
        Penduduk::find($id)->update($penduduk->all());


        //jika berhasil, kembali ke halaman utama

        return redirect('penduduks')
        -> with('Data Penduduk berhasil diupdate');
    }

    
    public function destroy($id)
    {
            //fungsi untuk menghapus data

        Penduduk::find($id)->delete();
         return redirect()->route('penduduks.index')-> with('Data penduduk berhasil dihapus');
    }
}
