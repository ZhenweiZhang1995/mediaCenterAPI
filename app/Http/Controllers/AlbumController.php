<?php

namespace App\Http\Controllers;

  use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AlbumController extends Controller
{
  public function index ()
  {
    // GET /albums
    // list all albums
    $albums = Album::all();
    return Response::json($albums);
  }

  public function create (Request $request)
  {
    // POST /albums
    // create new album
    Album::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    // GET /albums/$id
    // show a single album info
    $album = Album::find($id);
    return Response::json($album);
  }

  public function update (Request $request, $id)
  {
    // PUT /album/$id
    // update a single album
    $album = Album::find($id);
    $album->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function destroy ($id)
  {
    // DELETE /albums/$id
    // remove a single album
    $album = Album::find($id);
    $album->delete();
    return Response::json(['deleted' => true]);
  }
}
