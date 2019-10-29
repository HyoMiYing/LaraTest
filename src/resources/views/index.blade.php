@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div id="faqCard" class="card">
            <div class="card-header text-center"><h2>Frequently Asked Questions</h2></div>


                @if (count($queswers))
                    <div class="container p-0">
                        <ul class="m-0 list-group">
                            <faq :queswers="{{$queswers}}"></faq>
                        </ul>
                    </div>
                @else
                    <p class="m-2">This is a FaQ section. No questions or answers yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
