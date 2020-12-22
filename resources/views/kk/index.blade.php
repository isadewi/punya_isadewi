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
            <h1 class="m-0">Kartu Keluarga</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
              <li class="breadcrumb-item active">List Kartu Keluarga</li>
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
          <strong>Pengelolaan Data Kartu Keluarga</strong>
        </div>
            <div class="float-right">
              <a href="{{route('kk.create')}}" class="btn btn-success btn-sm">
                <i class="">Create New Kartu Keluarga </i>
              </a>
            </div>
          
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>NO</th>
              <th>NO Kartu Keluarga</th>
              <th>Nama Jorong</th>
              <th>Tanggal Pencatatan</th>
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kk as $kartu_keluarga)
            <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $kartu_keluarga->no }}</td>
                  <td>{{ $kartu_keluarga->jorong->nama }}</td>
                  <td>{{ $kartu_keluarga->tanggal_pencatatan }}</td>
                  <td class="text-center">
                    <form action="{{ route('kk.destroy',$kartu_keluarga->id) }}" method="POST" onsubmit="return confirm('Yakin Hapus Data')">
                      <a class="btn btn-info" href="{{ route('kk.show',$kartu_keluarga->id) }}">Show</a>
                      <a class="btn btn-primary" href="{{ route('kk.edit',$kartu_keluarga->id) }}">Edit</a>

                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
             @endforeach
          </tbody>
        </table>

         <div class="text-center">
                {!! $kk->links() !!}
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
