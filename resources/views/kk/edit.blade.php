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
                        <h3> Update Data Kartu Keluarga</h3>
                        
                      </div>

                      <div class="card-body" >

                        <!-- star form -->
                      
                        <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ url('kk/'.$kk->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                   
                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <input type="text" name="no" value="{{old('no', $kk->no) }}" class="form-control" autofocus required disabled>
                                    </div>
                                     <div class="form-group">
                                        <label>Nama Jorong</label>
                                         <select name="jorong_id" class="form-control">
                                          <option value="">--Pilih--</option>
                                          @foreach ($jorong as $item)
                                          <option value= "{{$item->id}}"  {{ old('jorong_id', $kk->jorong_id)==$item->id ? 'selected' : null }} > {{$item->nama}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pencatatan</label>
                                        <input type="date" name="tanggal_pencatatan" value="{{old('tanggal_pencatatan', $kk->tanggal_pencatatan) }}" class="form-control" autofocus required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('kk.index') }}" class="btn btn-default  float-right">Cancel</a>
                 
                                </form>
                            </div>
                        </div>
         
                      
                      
                        
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