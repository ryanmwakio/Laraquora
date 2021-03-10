@extends('layouts.app')

@section('content')
    <div class="container mt-3">

        <div class="mx-auto col-sm-12 col-md-7">
            <h3>Ask a question</h3>
            <hr>
            <form action="{{ route('questions.store') }}" method="post">

               @csrf

                <div class="form-group">
                    <label for="title">Question:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">More information:</label>
                     <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit Question" class="btn btn-primary">
                </div>
                @include('includes.messages')


            </form>
        </div>

    </div>
@endsection
