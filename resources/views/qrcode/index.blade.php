@extends('layouts.app')

@section('content')
<div class="col-9">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Text</th>
      <th scope="col">QRcode</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($qrcodes as $qrcode)
    <tr>
      <th scope="row" style="vertical-align: !important; text-align:center;">{{ $loop->iteration }}</th>
      <td style="vertical-align: !important; text-align:center;">{{$qrcode->text}}</td>
      <td><img src="{{ asset("qrcodes/{$qrcode->qr_file}") }}" /> </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@endsection