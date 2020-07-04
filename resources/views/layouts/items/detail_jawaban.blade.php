@extends('layouts.master')
@section('content')

<div class="container mx-3 my-4">
<div class="card px-3">
  <h1> Pertanyaan </h1> <br>
  <p>Judul : {{$pertanyaan->judul}} </p> <br>
  <p>Isi : {{$pertanyaan->isi}} </p> <br>
  <p>Tgl Dibuat : {{$pertanyaan->tanggal_dibuat}} </p> <br>
  <p>Tgl Diupdate : {{$pertanyaan->tanggal_diperbaharui}} </p> <br>

  <h1> Jawaban </h1> <br>
  @foreach($jawabans as $jawaban)
    <p>{{$jawaban->isi}}, {{$jawaban->tanggal_dibuat}}, {{$jawaban->tanggal_diperbaharui}}</p> <br>
  @endforeach

</div>
</div>

@endsection