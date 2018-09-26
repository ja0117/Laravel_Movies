@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @if(Auth::user())
                @if(Auth::user()->hasRole('owner'))
                    test
                @endif
            @endif

        </div>
    </div>
@endsection
