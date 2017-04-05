<?php

namespace App\Http\Controllers;

use App\VideoGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class VideoGameController extends Controller
{
  public function index ()
  {
    // GET /videoGames
    // list all videoGames
    $videoGames = VideoGame::all();
    return Response::json($videoGames);
  }

  public function create (Request $request)
  {
    // POST /videoGames
    // create new videoGame
    VideoGame::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    // GET /videoGames/$id
    // show a single videoGame info
    $videoGame = VideoGame::find($id);
    return Response::json($videoGame);
  }

  public function update (Request $request, $id)
  {
    // PUT /videoGame/$id
    // update a single videoGame
    $videoGame = VideoGame::find($id);
    $videoGame->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy ($id)
  {
    // DELETE /videoGames/$id
    // remove a single videoGame
    $videoGame = VideoGame::find($id);
    $videoGame->delete();
    return Response::json(['deleted' => true]);
  }
}
