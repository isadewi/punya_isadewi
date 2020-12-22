<!DOCTYPE html>
<html lang="en">
<head>
   <title>UAS PDB</title>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
   @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
      @include('template.left-sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
   
      <div class="card card-info card-outline">
      <div class="card-header">
        <div class="pull-left">
          <strong>Penduduk Usia Produktif (14 - 64 Tahun)</strong>
        </div>
           
          
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>NO</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Pendidikan</th>
                <th>Umur</th>
            </tr>
          </thead>

          <tbody>
         


         </tbody>  
        </table>
           
         <div class="text-center">
               
        </div>
        
      </div>
      
    </div>
    
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->
 
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
  @include('template.script') 
</body>
</html>
