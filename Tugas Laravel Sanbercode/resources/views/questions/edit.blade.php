@extends('adminLTE.master')

@section('content')
<div class="card card-primary" style="margin: 20px">
    <div class="card-header">
    <h3 class="card-title">Edit Pertanyaan {{$questions->id}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$questions->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $questions->judul) }}" placeholder="Judul">
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Pertanyaan</label>
                <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $questions->isi) }}" placeholder="Pertanyaan">
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
@endsection