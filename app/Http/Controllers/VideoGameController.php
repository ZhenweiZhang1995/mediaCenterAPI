<?php

namespace App\Http\Controllers;

use App\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class VideogameController extends Controller
{
  public function index ()
  {
    // GET /videoGames
    // list all videoGames
    $videogames = Videogame::all();
    return Response::json($videogames);
  }

  public function create (Request $request)
  {
    // POST /videoGames
    // create new videoGame
    Videogame::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    // GET /videoGames/$id
    // show a single videoGame info
    $videogame = VideoGame::find($id);
    return Response::json($videogame);
  }

  public function update (Request $request, $id)
  {
    // PUT /videoGame/$id
    // update a single videoGame
    $videogame = Videogame::find($id);
    $videogame->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy ($id)
  {
    // DELETE /videoGames/$id
    // remove a single videoGame
    $videogame = Videogame::find($id);
    $videogame->delete();
    return Response::json(['deleted' => true]);
  }
}
