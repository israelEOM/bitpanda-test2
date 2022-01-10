@extends('layouts.default')

@section('title', 'Bitpanda - Test2')
    
@section('content')

<div class="px-4 py-5 my-5 text-center" bis_skin_checked="1">
    <img class="d-block mx-auto mb-4" src="https://icon-library.com/images/error-icon-png/error-icon-png-20.jpg" alt="" width="72" height="72">
    <h1 class="display-5 fw-bold">Error</h1>
    <div class="col-lg-6 mx-auto" bis_skin_checked="1">
      <p class="lead mb-4">You are trying to access a wrong URL.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center" bis_skin_checked="1">
        <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg px-4 gap-3">Return</a>
      </div>
    </div>
  </div>

@endsection