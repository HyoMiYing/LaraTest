@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div id="faqCard" class="card">
            <div class="card-header"><span class="float-left p-0 m-0 lead">FaQ control panel</span><span class="float-right"><a href="/faqs/create" class="btn btn-primary">Create a New FaQ</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (count($queswers))
                    <ul class="list-group">
                            @foreach ($queswers as $queswer)
                                <li style="background-color: #9e9e9e;" class="list-group-item flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Q: {{ $queswer->question }}</h5>
                                    </div>
                                    <p class="mb-1">A: {{ $queswer->answer }}</p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm"></div>
                                            <div class="col-sm">
                                                <form action="/faqs/{{ $queswer->id }}" class="float-right" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="submit" name="button" class="btn btn-danger">Delete</button>
                                                </form>
                                                <a href="/faqs/{{ $queswer->id }}/edit" class="btn btn-primary float-right mr-1">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                    </ul>
                @else
                    <p>This is a FaQ section.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
