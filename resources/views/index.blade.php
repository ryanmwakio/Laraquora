@extends('layouts.app')



@section('content')
<div class="hero px-3">
  <div class="vertical-center">
    <h1>Ask a Question?</h1>
    <p>Ask any question you want to know and we will get the answers for you.</p>
    <p class="mt-2"><a href="/questions/create" class="btn btn-outline-light btn-lg" role="button">Ask Now</a> <a href="/questions" class="btn-light btn btn-lg">All questions</a></p>
  </div>
</div>

<div class="bg-primary-gradient text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-3 text-center">
                <h3>Ask</h3>
                Ask all questions from tech, to health, to life and economics and community will have answers for you because that's what we do best- get answers for you.
                <hr>
            </div>
            <div class="col-md-4 col-sm-12 mb-3 text-center">
                <h3>Connect</h3>
                Connect with individuals who got questions or answers like you do because learning is a continous process of discovery.
                <hr>
            </div>
            <div class="col-md-4 col-sm-12 mb-3 text-center">
                <h3>Get Answers</h3>
                Ged the answers to your most nagging questions from experts and individuals based on a particular field.You got questions, we got answers.
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <div class="card card-primary bg-dark">
            <div class="row">
                <div class="col-sm-12 col-md-4 text-center">
                    <div class="p-3">
                        <h4>Welcome</h4>
                        <p>Welcome to Laraquora, your one stop place for all answers and questions. While here connect, ask and answer questions and form a community.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 text-center">
                    <div class="p-3">
                        <h4>About Us</h4>
                        <p>Laraquora is the place for all answers. You got questions we got answers. This is what the product endeovers to achieve.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 text-center">
                    <div class="p-3">
                        <h4>Our Philosophy</h4>
                        <p>The philosophy behind it all is we deliver solutions through you. You get the answers through the questions you ask.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


    <div class="card bg-dark-gradient p-3">
        <div class="contact-card">

                <div class="row contact-details">
                    <h2 class="col-md-4 col-sm-12 text-center p-lg">
                        {{ App\Question::all()->count() }} questions
                    </h2>
                    <h2 class="col-md-4 text-center col-sm-12 p-lg">{{ App\Answer::all()->count() }} answers</h2>
                    <h2 class="col-md-4 col-sm-12 text-center p-lg">{{ App\User::all()->count() }} users</h2>
                </div>

        </div>
    </div>
@endsection
