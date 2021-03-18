<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Your Answer</h3>
                </div>
                <hr>
                <form action="{{route('questions.answers.store',$question->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        @if(Auth::guest())
                            <textarea class="form-control readonly {{$errors->has('body')? 'is-invalid':''}}" name="body" id="" cols="30" rows="7"></textarea>
                        @else
                            <textarea class="form-control {{$errors->has('body')? 'is-invalid':''}}" name="body" id="" cols="30" rows="7"></textarea>
                            @endif
                        @if ($errors->has('body'))
                            <div class="invalid-feedback"><strong>
                                    {{$errors->first('body')}}
                                </strong></div>
                            @endif
                    </div>
                    <div class="form-group">
                        @if(Auth::guest())
                            <h5>You must be logged in to submit an answer. <a href="/login">Login</a></h5>
                            <button type="submit" disabled class="btn btn-lg btn-outline-primary">Submit</button>
                        @else
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
