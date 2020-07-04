@extends('layouts.master')
@section('content')

<div class="container mx-3 my-4">
<div class="card px-3 py-3">

<form action="{{ url('/pertanyaan/'. $id) }}" method="POST">
{{ method_field('put') }}
@csrf
  <input hidden name="id" value="{{$id}}">
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input name="judul" type="text" value="{{$pertanyaan->judul}}" class="form-control" placeholder="Masukkan Judul Pertanyaan" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi :</label>
    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
  </div>


  <input hidden name="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}} ">

  <input hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }} ">

  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
</div>

@endsection