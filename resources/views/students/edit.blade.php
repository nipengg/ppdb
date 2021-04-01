@extends('students.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/students') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ url('/students/update') }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS :</strong>
                    <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{ $students->nis }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Name" value="{{ $students->nama }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>JK :</strong>
                    <input type="text" name="jk" class="form-control" placeholder="JK" value="{{ $students->jk }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat Lahir :</strong>
                    <input type="text" name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $students->tmpt_lahir }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Lahir :</strong>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat" value="{{ $students->alamat }}" required></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah :</strong>
                    <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" value="{{ $students->asal_sekolah }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas :</strong>
                    <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $students->kelas }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jurusan :</strong>
                    <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $students->jurusan }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
   
    </form>
@endsection