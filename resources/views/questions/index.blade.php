@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h3>Recent Questions</h3>
        <hr>

            @foreach ($questions as $question)
            <div class="card mb-3">
                <div class="card-body">
                    <h6>{{ $question->title }}</h6>
                    <p>{{ $question->description }}</p>
                    <a href="{{ route('questions.show',$question->id) }}" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
            @endforeach

            <div class="pagination-links">
                {{ $questions->links() }}
            </div>


    </div>
@endsection
