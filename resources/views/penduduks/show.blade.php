<!DOCTYPE html>
<html>
<head>
  <title>UAS PDB</title>
  @include('template.head')
</head>
<body lass="hold-transition sidebar-mini">
  <div class="wrapper">
      <!-- Navbar -->
   @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->  
      @include('template.left-sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <!-- content  -->
              <div class="container-fluid">
                <div class="row justify-content-around">
                  <div class="col-md-12 " style="margin-left:30%;">
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h3> Detail Data Penduduk</h3>
                        
                      </div>

                      <div class="card-body" >

                        <!-- star form -->
                      
                       <div style="padding: 45px; box-sizing: border-box;">
                          <table  width="100%" class="table" >
                            <tr>
                               <td>No Kartu Keluarga</td>
                               <td>:</td>
                               <td>{{ old('kartu_keluarga_id',$penduduk->kartu_keluarga_id) }}</td>
                            </tr>

                            <tr>
                               <td>Nama</td>
                               <td>:</td>
                               <td>{{ old('nama', $penduduk->nama) }}</td>
                            </tr>

                            <tr>
                               <td>NIK</td>
                               <td>:</td>
                               <td>{{ old('nik', $penduduk->nik) }}</td>
                            </tr>

                            <tr>
                               <td>Tempat lahir</td>
                               <td>:</td>
                               <td>{{ old('tempat_lahir', $penduduk->tempat_lahir)  }}</td>
                            </tr>

                             <tr>
                               <td>Tanggal Lahir</td>
                               <td>:</td>
                               <td>{{ old('tanggal_lahir', $penduduk->tanggal_lahir) }}</td>
                            </tr>


                             <tr>
                               <td>Agama</td>
                               <td>:</td>
                               <td>{{ old('agama', $penduduk->agama) }}</td>
                            </tr>

                             <tr>
                               <td>Jenis Kelamin</td>
                               <td>:</td>
                               <td>{{ old('jenis_kelamin', $penduduk->jenis_kelamin)}}</td>
                            </tr>
                             <tr>
                               <td>Level Pendidikan</td>
                               <td>:</td>
                               <td>{{ old('level_pendidikan_id', $penduduk->level_pendidikan_id) }}</td>
                            </tr>

                             <tr>
                               <td>Pekerjaan</td>
                               <td>:</td>
                               <td>{{ old('pekerjaan_id', $penduduk->pekerjaan_id)}}</td>
                            </tr>
                            <tr>
                               <td>Status Pernikahan</td>
                               <td>:</td>
                               <td>{{ old('status_pernikahan', $penduduk->status_pernikahan)}}</td>
                            </tr>
                            <tr>
                               <td>Status Keluarga</td>
                               <td>:</td>
                               <td>{{ old('status_keluarga', $penduduk->status_keluarga)}}</td>
                            </tr>
                            <tr>
                               <td>Kewarganegaraan</td>
                               <td>:</td>
                               <td>{{ old('kewarganegaraan_id', $penduduk->kewarganegaraan_id)}}</td>
                            </tr>
                             <tr>
                               <td>Ayah</td>
                               <td>:</td>
                               <td>{{ old('ayah', $penduduk->ayah)}}</td>
                            </tr>
                             <tr>
                               <td>Ibu</td>
                               <td>:</td>
                               <td>{{old('ibu', $penduduk->ibu)}}</td>
                            </tr>
                          </table>
                        </div>
         
                      
                         <a href="{{ route('penduduks.index') }}" class="btn btn-default">Cancel</a>
                 
                        
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </div>
                
              </div>


          

          <!-- /content -->
            
          </div>
          
        </div>
        
      </div>
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
      <div  class="row justify-content-center">
        <div class="card card-info card-outline">
          
        </div>
        
      </div>
      
    </div>

    
  </div>
    
  </div>

  <!-- jQuery -->
  @include('template.script') 

</body>
</html>