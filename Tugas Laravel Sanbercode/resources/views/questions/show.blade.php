@extends('adminLTE.master')

@section('content')
    <table>
        <tr>
            <td>Judul : </td>
            <td>{{ $questions->judul}}</td>
        </tr>
        <tr>
            <td>Pertanyaan : </td>
            <td>{{ $questions->isi}}</td>
        </tr>
    </table>
@endsection