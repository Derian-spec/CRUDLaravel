@extends('layouts.master')
@section('content')

<div class="container mx-3 my-4">
<div class="card px-3">
<table class="table table-dark table-hover mt-2">
  <thead>
    <tr>
      <th>Id</th>
      <th>Jawaban</th>
    </tr>
  </thead>
  @foreach($jawaban as $jwb)
  <tbody>
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $jwb->isi }}</td>
    </tr>

    @endforeach
  </tbody>
  </table>
</div>
</div>

@endsection