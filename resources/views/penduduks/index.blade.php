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
            <h1 class="m-0">Penduduk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Penduduk</li>
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
          <strong>Pengelolaan Data Penduduk</strong>
        </div>
            <div class="float-right">
              <a href="{{route('penduduks.create')}}" class="btn btn-success btn-sm">
                <i class="">Create New Penduduk </i>
              </a>
            </div>
          
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>NO</th>
                   <th>NIK</th>
                   <th>Nama</th>
                   <th>Tempat Lahir</th>
                   <th>Agama</th>
                   <th>Jenis Kelamin</th>
                   <th>Status Pernikahan</th>

              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($penduduks as $penduduk)

            <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $penduduk->nik }}</td>
                  <td>{{ $penduduk->nama }}</td>
                  <td>{{ $penduduk->tempat_lahir }}</td>
                  <td>{{ $penduduk->agama }}</td>
                  <td>{{ $penduduk->jenis_kelamin }}</td>
                  <td>{{ $penduduk->status_pernikahan }}</td>
                  <td class="text-center">
                    <form action="{{ route('penduduks.destroy',$penduduk->id) }}" method="POST" onsubmit="return confirm('Yakin Hapus Data')">
                      <a class="btn btn-info" href="{{ route('penduduks.show',$penduduk->id) }}">Show</a>
                      <a class="btn btn-primary" href="{{ route('penduduks.edit',$penduduk->id) }}">Edit</a>

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
                {!! $penduduks->links() !!}
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
