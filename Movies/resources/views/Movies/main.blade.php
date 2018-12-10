@extends('layouts.app')

@section('content')


<form>

    <input type="hidden" name="_method" value="delete" />

    <table class="table">
        <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col"> title</th>
            <th scope="col"> genre  </th>
            <th scope="col"> score </th>
            @if(Auth::user())
                @if(Auth::user()->hasRole('owner') || Auth::user()->hasRole('moderator'))
                    <th scope="col"> Delete </th>
                    <th scope="col"> Update </th>
                @endif
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <th scope="row"> #{{$movie->id}} </th>
                <td> {{$movie->movie_title}} </td>
                <td> {{$movie->movie_genre}} </td>
                <td> {{$movie->movie_rating}} </td>

                @if(Auth::user())
                    @if(Auth::user()->hasRole('owner'))


                        <td><a class="btn btn-danger delete_user" href="movies/delete/{{$movie->id}}">Delete</a> </td>
                        <td><a class="btn btn-warning delete_user" href="movies/update/{{$movie->id}}">Update</a> </td>


                    @endif
                @endif

            </tr>
        @endforeach
        </tbody>
    </table>
</form>

@endsection