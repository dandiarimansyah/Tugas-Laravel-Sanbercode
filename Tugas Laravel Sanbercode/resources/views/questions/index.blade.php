@extends('adminLTE.master')

@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">
      <h3 class="card-title">List Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="/pertanyaan/create" class="btn btn-info mb-3">Tambah Pertanyaan</a>

      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Pertanyaan</th>
            <th style="width: 100px">Action</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($questions as $key => $q)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $q -> judul}}</td>
                    <td>{{ $q -> isi}}</td>
                    <td style="display: flex">
                        <a href="/pertanyaan/{{$q->id}}" class="btn btn-success btn-sm">Show</a>
                        <a href="/pertanyaan/{{$q->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                        <form action="/pertanyaan/{{$q->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada pertanyaan</td>
                </tr>
            @endforelse

        </tbody>
      </table>
    </div>
  </div>
@endsection