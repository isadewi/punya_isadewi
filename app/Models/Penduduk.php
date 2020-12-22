<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table='penduduk';
    public $timestamps = false;


    protected $fillable = [
         'kartu_keluarga_id',
          'nama',
          'nik',
          'tempat_lahir',
          'tanggal_lahir',
          'agama',
          'jenis_kelamin',
          'level_pendidikan_id',
           'pekerjaan_id',
           'status_pernikahan',
           'status_keluarga',
           'kewarganegaraan_id',
           'ayah',
           'ibu'                 
    ];
    
  
     
   


     public function kartuKeluarga(){
    	return $this->belongsTo('App\Models\Kartukeluarga');
    }

     public function levelpendidikan(){
    	return $this->belongsTo('App\Models\LevelPendidikan');
    }

     public function pekerjaan(){
    	return $this->belongsTo('App\Models\Pekerjaan');
    }

     public function kewarganegaraan(){
    	return $this->belongsTo('App\Models\Kewarganegaraan');
    }
}
