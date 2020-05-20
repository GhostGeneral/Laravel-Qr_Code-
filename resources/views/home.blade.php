@extends('layouts.app')

@section('content')

<div class="col-9 text-center">
 <h3>Welcome {{ Auth::user()->name }},</h3>
 <p>Please select an option from the side bar.</p>
</div>

@endsection
