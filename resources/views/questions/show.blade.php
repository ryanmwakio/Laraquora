@extends('layouts.app')

@section('content')
    <div class="mt-3">
        <div class="container py-3">

            <div class="mx-auto col-sm-12 col-md-9">

                <div class="card border-right bg-light">
                    <div class="card-body">
                        @if ($question)
                        <h4>{{ $question->title }}</h4>

                        <p class="lead">{{ $question->description }}</p>
                        <div class="text-disabled border text-center pt-2"><p>Asked by: <a href="{{ isset($question->user->id) ? route('profile',$question->user->id) : route('index') }}">{{ isset($question->user->name) ? $question->user->name : "unknown" }}</a>, &nbsp; {{ $question->created_at->diffForHumans() }}</p></div>
                        @else
                        <div class="text-danger text-center">sorry the question was not found.</div>
                        @endif
                    </div>
                </div>


                @if ($question->answers->count()==0)
                     <h5 class="text-info text-center m-2">No answers available at the moment </h5>
                 @endif
                <hr>
                <div class="col-md-8 col-sm-12">
                    @include('includes.messages')
                    <form action="{{ route('answers.store') }}" method="POST">
                        @csrf
                        <h6 class="text-capitalize">submit your own answer</h6>

                        <div class="form-group">
                            <textarea name="content" id="" rows="4" class="form-control"></textarea>
                             <input type="hidden" name="question_id" value="{{ $question->id }}">
                        </div>
                        <input type="submit" value="Submit Answer" class="btn btn-primary">
                    </form>
                </div>
                <hr>

                @foreach ($question->answers as $answer)
                    <div class="card my-2">
                        <div class="card-body">
                            <p>{{ $answer->content }}</p>
                            <p>Answered by: <a href="{{ route('profile',$answer->user->id) }}">{{ isset($answer->user->name) ? $answer->user->name : "unknown"  }}</a>, {{ $answer->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                 @endforeach
            </div>

        </div>
    </div>
@endsection
