@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @if(Auth::user()->hasRole('dev'))
                Developer screen owo
            @endif

        </div>
    </div>
@endsection
