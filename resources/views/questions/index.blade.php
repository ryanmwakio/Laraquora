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
                    <p class="bg-dark p-2 text-danger col-md-3 col-sm-10">{{ $question->created_at->diffForHumans() }}  by {{ isset($question->user->name) ? $question->user->name : "unknown" }}</p><br>
                    <a href="{{ route('questions.show',$question->id) }}" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
            @endforeach

            <div class="pagination-links">
                {{ $questions->links() }}
            </div>


    </div>
@endsection
