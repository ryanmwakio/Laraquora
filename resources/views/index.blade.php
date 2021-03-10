@extends('layouts.app')



@section('content')
<div class="hero px-3">
  <div class="vertical-center">
    <h1>Ask a Question?</h1>
    <p>Ask any question you want to know and we will get the answers for you.</p>
    <p><a href="/questions/create" class="btn btn-outline-light btn-lg" role="button">Ask Now</a>
  </div>
</div>

<div class="container p-3">
    <h2>Recent Questions:</h2>
    <hr>

    {{-- @foreach ($questions as $question) --}}
    {{-- <div class="card"> --}}
      {{-- <p class="card-body">{{ $question }}</p> --}}
    {{-- </div> --}}
    {{-- @endforeach --}}
</div>
@endsection
