@extends('layouts.master')
@section('content')

<div class="container mt-5">
<div class="card px-2 py-4">
<a href="/pertanyaan/create">
<button type="submit" class="btn btn-primary">Tambah Pertanyaan</button></a>
<table class="table table-dark table-hover mt-2">
    <thead>
      <tr>
        <th>No</th>
        <th>Pertanyaan</th>
        <th>Edit Pertanyaan</th>
        <th>Jawaban</th>
        <th>Form Jawaban</th>
        <th>Detail QnA</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pertanyaans as $pertanyaan)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pertanyaan->isi }}</td>

        <td>
          <a href=" {{ url('/pertanyaan/'. $pertanyaan->id. '/edit') }} ">
            <button class="btn btn-warning">Edit Pertanyaan</button>
          </a>
        </td>

        <td>
          <a href=" {{ url('/jawaban/'. $pertanyaan->id) }} ">
            <button class="btn btn-info">Detail Jawaban</button>
          </a>
        </td>

        <td>
          <form action=" {{ url('/jawaban/'. $pertanyaan->id) }} " method="POST">
          @csrf
          <input type="text" name="isi">
          <input hidden name="pertanyaan_id" value="{{ $pertanyaan->id }}">
          <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
          <input hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
          <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </td>

        <td>
          <a href=" {{ url('/pertanyaan/'. $pertanyaan->id) }} ">
            <button class="btn btn-primary">QnA</button>
          </a>
        </td>

        <td>
          <form action="{{url('/pertanyaan/'. $pertanyaan->id)}}" method="POST">
          @csrf
          {{ method_field('delete') }}
          <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>

        <!-- <td><a href=" {{ url('/jawaban'. $pertanyaan->id) }} ">
        <button type="submit" class="btn btn-primary"></button></a>
        </td> -->
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

@endsection