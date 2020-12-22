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
                        <h3> Detail Data Kartu Keluarga</h3>
                        
                      </div>

                      <div class="card-body" >

                        <!-- star form -->
                      
                       <div style="padding: 45px; box-sizing: border-box;">
                          <table  width="100%" class="table" >

                            <tr>
                               <td>No Kartu Keluarga</td>
                               <td>:</td>
                               <td>{{ old('no', $kk->no) }}</td>
                            </tr>

                             <tr>
                               <td>Nama Jorong</td>
                               <td>:</td>
                               <td>{{ old('jorong_id', $kk->jorong->nama) }}</td>
                            </tr>

                            <tr>
                               <td>Tanggal Pencatatan</td>
                               <td>:</td>
                               <td>{{ old('tanggal_pencatatan', $kk->tanggal_pencatatan) }}</td>
                            </tr>

                            
                          </table>
                        </div>
         
                      
                         <a href="{{ route('kk.index') }}" class="btn btn-default">Back</a>
                 
                        
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