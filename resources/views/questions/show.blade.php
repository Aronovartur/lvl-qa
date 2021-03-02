@extends('layouts.main')



@section('title')
    {{$question->title}}
@endsection

@section('content')


    <div class="card">
        <div class="card-header">

            <div class="d-flex align-items-center">
                <h1>{{$question->title}}</h1>

                <div class="ml-auto">
                    <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all Questions</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            {!! $question->body !!}
        </div>
    </div>


@endsection
