@extends('layouts.main')



@section('title')
    All Questions
@endsection

@section('content')


    <div class="card">
        <div class="card-header">

            <div class="d-flex align-items-center">
                <h2>Ask Question</h2>

                <div class="ml-auto">
                    <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all Questions</a>
                </div>
            </div>

        </div>
        <div class="card-body">

            <form action="{{route('questions.store')}}" method="post">
              @include('questions._form',['buttonText'=>'Ask Question'])
            </form>

        </div>
    </div>


@endsection
