@extends('layouts.app')

@section('content')
<div class="col-9 text-center">
  <div class="col-6 offset-md-3 text-center">
    <form id="form">
      <div class="message"></div>
      <div class="form-group">
        <label for="qrText">Enter Text</label>
        <textarea class="form-control" id="qrText" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Generate QR</button>
    </form>
    <hr>
    <div class="qr text-center"></div>
  </div>
</div>
<script type="module" src="{{ asset('js/generate_qrcode.js') }}"></script>

@endsection