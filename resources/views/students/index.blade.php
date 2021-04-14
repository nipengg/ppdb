@extends('welcome')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Students</h3>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                            </div>
                            @endif

                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nis</th>
                                    <th>Name</th>
                                    <th>JK</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Asal Sekolah</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->nis }}</td>
                                    <td>{{ $student->nama }}</td>
                                    <td>{{ $student->jk }}</td>
                                    <td>{{ $student->tmpt_lahir }}</td>
                                    <td>{{ $student->tgl_lahir }}</td>
                                    <td>{{ $student->alamat }}</td>
                                    <td>{{ $student->asal_sekolah }}</td>
                                    <td>{{ $student->kelas }}</td>
                                    <td>{{ $student->jurusan }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url('students/edit/'.$student->nis)}}">Edit</a>   
                                        <a class="btn btn-danger" href="{{url('students/delete/'.$student->nis)}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>
    
@endsection
 
@section('content1')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PPDB</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('students/create')}}"> Add new student</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table id="table_id" class="table table-bordered">
        <thead>
        <tr>
            <th>Nis</th>
            <th>Name</th>
            <th>JK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->jk }}</td>
            <td>{{ $student->tmpt_lahir }}</td>
            <td>{{ $student->tgl_lahir }}</td>
            <td>{{ $student->alamat }}</td>
            <td>{{ $student->asal_sekolah }}</td>
            <td>{{ $student->kelas }}</td>
            <td>{{ $student->jurusan }}</td>
            <td>
                <a class="btn btn-primary" href="{{url('students/edit/'.$student->nis)}}">Edit</a>   
                <a class="btn btn-danger" href="{{url('students/delete/'.$student->nis)}}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  
    {!! $students->links() !!}

    <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
    </script>

      
@endsection