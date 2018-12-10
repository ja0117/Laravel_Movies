<?php

namespace App\Http\Controllers;

use App\movies;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = movies::all();
        return response()->json($movies);
    }

    public function getID($id)
    {
        $movie = movies::find($id);

        if (!$movie) {
            return response()->json("Get out of here!");
        }
        return response()->json($movie);
    }

    public function destroy(movies $movie)
    {
        if (!$movie)
        {
            return response()->json("There's nothing to see here!");
        }

        movies::destroy($movie);
        return response()->json("Movie with " . $movie->id . " Has been Deleted!");
    }

    public function updateform($id)
    {
        $movies = movies::find($id);
        return view('Movies/edit', compact('movies'));
    }

    public function create(Request $request)
    {
        $movie = new movies;
        $movie->fill($request->toArray() );
        //$movie->setUpdatedAt(Carbon::now());
        //$movie->setCreatedAt(Carbon::now());
        $movie->save();
        return redirect('movies');
    }
}
