@extends('layouts.main')



@section('title')
    All Questions
@endsection

@section('content')


    <div class="card">
        <div class="card-header">
            All Questions
        </div>
        <div class="card-body">
            @foreach ($questions as $question)
                <div class="media">
                    <div class="media-body">
                        <h3 class="mt-0">{{$question->title}}</h3>
                        {{Str::limit($question->body, 250)}}

                    </div>
                </div>
                <hr>
            @endforeach
            {{$questions->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>


@endsection
