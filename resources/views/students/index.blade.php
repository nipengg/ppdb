@extends('students.layout')
 
@section('content')
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
   
    <table class="table table-bordered">
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
            <th width="280px">Action</th>
        </tr>
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
                <form action="{{url('students/create')}}" method="POST">
    
                    <a class="btn btn-primary" href="{{url('students/edit/'.$student->nis)}}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $students->links() !!}
      
@endsection