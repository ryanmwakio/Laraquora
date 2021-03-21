@extends('layouts.app')

@section('content')
 <div class="container p-3">
     <h1>{{ $user->name }}'s profile</h1>

     <p>See what {{ $user->name }} has been up to on Laraquora</p>
     <hr>
     <div class="row">
         <div class="col-md-6 col-sm-12 mb-3">
            <h4>Questions</h4>
            @foreach ($user->questions as $question)

                <div class="card my-2">
                    <div class="card-body">
                        <h6>{{ $question->title }}</h6>
                        <a href="{{ route('questions.show',$question->id) }}" class="btn btn-outline-primary">Read more</a>
                    </div>
                </div>
            @endforeach
         </div>

         <div class="col-md-6 col-sm-12 mb-3">
            <h4>Answers</h4>
            @foreach ($user->answers as $answer)

            <div class="card my-2">
                <div class="card-body">
                    <h6>{{ $answer->content }} <span class="text-info">was replying to</span></h6>
                        <div class="card col-9 ml-5 bg-light">
                            <div class="card-body">{{ $answer->question->title }} <a href="{{ route('questions.show',$answer->question->id) }}">more</a></div>
                        </div>
                </div>
            </div>
        @endforeach
         </div>
     </div>
 </div>
@endsection
