@extends('layouts.master')
@section('content')

<div class="container mx-3 my-4">
<div class="card px-3">
  @foreach($jawaban as $jwb)
  <table>
    <tr>
    <td>{{ $loop->iteration }}</td>
      <td>{{ $jwb->isi }}</td>
    </tr>
  </table>
  
  @endforeach
</div>
</div>

@endsection