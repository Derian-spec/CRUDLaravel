@extends('layouts.master')
@section('content')

<div class="container mt-5">
<form action="/jawaban" method="POST">
@csrf
  <div class="form-group">
    <label for="isi">Isi :</label>
    <input name="isi" type="text" class="form-control" placeholder="Masukkan Isi Jawaban" id="isi">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection