@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div id="faqCard" class="card">
            <div class="card-header"><span class="float-left p-0 m-0 lead">Edit a FaQ</span><span class="float-right p-0 m-0"><a href="/home" class="btn btn-primary">Go Back</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="/faqs/{{ $queswer->id }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="question">Question</label>
                        <textarea class="form-control" id="question" name="question" placeholder="Enter question">{{ $queswer->question }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea class="form-control" id="answer" name="answer" placeholder="Enter answer">{{ $queswer->answer }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
