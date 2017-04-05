<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MovieController extends Controller
{
  public function index ()
  {
    // GET /movies
    // list all movies
    $movies = Movie::all();
    return Response::json($movies);
  }

  public function create (Request $request)
  {
    // POST /movies
    // create new movie
    Movie::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    // GET /movies/$id
    // show a single movie info
    $movie = Movie::find($id);
    return Response::json($movie);
  }

  public function update (Request $request, $id)
  {
    // PUT /movie/$id
    // update a single movie
    $movie = Movie::find($id);
    $movie->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy ($id)
  {
    // DELETE /movies/$id
    // remove a single movie
    $movie = Movie::find($id);
    $movie->delete();
    return Response::json(['deleted' => true]);
  }
}
