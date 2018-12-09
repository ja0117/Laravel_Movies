@extends('layouts.app')

@section('content')


    <form>
        @foreach($movies as $movie)
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$movie->id}}">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">movie title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$movie->movie_title}}">
            </div>
        </div>
        <div class="form-group row dropdown">

            <label class="col-sm-2 col-form-label">movie genre</label>
            <div class="form-group">
                <select class="form-control" id="sel1">
                    <option>{{$movie->movie_genre}}</option>
                    <option>Adventure|Fantasy</option>
                    <option>Drama</option>
                    <option>Documentary</option>
                    <option>Crime|Drama</option>
                    <option>Comedy</option>
                    <option>Drama|Sci-Fi</option>
                    <option>Crime|Mystery|Thriller</option>
                    <option>Drama|Horror|Mystery</option>
                    <option>IMAX</option>
                    <option>War</option>
                    <option>(no genres listed)</option>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">movie score</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$movie->movie_rating}}">
            </div>
        </div>
        @endforeach
    </form>

@endsection