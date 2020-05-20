@extends('layouts.app')

@section('content')
<div class="col-9">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <th scope="row" style="vertical-align: !important; text-align:center;">{{ $loop->iteration }}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@endsection