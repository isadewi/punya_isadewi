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
            						<h3> Tambah Data Kartu Keluarga</h3>
            						
            					</div>

            					<div class="card-body">

            					 @if ($errors->any())
              			 		<div class="alert alert-danger">
	              			 		<strong>Whoops!</strong>ere were some problems with your input.<br><br>
		              			 	<ul>
		              			 		@foreach ($errors->all() as $error)
		              			 		<li>{{ $error }}</li>
		              			 		@endforeach
		              			 	</ul>
              				    </div>
              					 @endif 
            					  <!-- star form -->
                        <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ url('kk')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                     <div class="form-group">
                                        <label>NO Kartu Keluarga</label>
                                        <input type="text" name="no" class="form-control" autofocus required>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jorong_id">Jorong</label>
                                        <select name="jorong_id" class="form-control">
                                          <option value="">--Pilih--</option>
                                          @foreach ($jorong as $kk)
                                          <option value="{{ $kk->id }}">{{$kk->nama}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pencatatan</label>
                                        <input type="date" name="tanggal_pencatatan" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                   
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a class="btn btn-secondary  float-right" href="{{ route('kk.index') }}"> Cancel</a>
                                </form>
                            </div>
                        </div>

                        <!-- /finish  form-->

            						
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