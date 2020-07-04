@extends('layouts.master')
@section('content')

<div class="container mt-5">
<form action="{{ url('/pertanyaan') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input name="judul" type="text" class="form-control" placeholder="Masukkan Judul Pertanyaan" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi :</label>
    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
  </div>
  <input hidden name="tanggal_dibuat" value=" {{ \Carbon\Carbon::now() }} ">
  <input hidden name="tanggal_diperbaharui" value=" {{ \Carbon\Carbon::now() }} ">
  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>

@endsection