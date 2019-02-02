<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
  public function index()
  {
    return Lecture::all();
  }

  public function store(Request $request)
  {
    $lecture = Lecture::create($request->all());
    return response()->json($lecture, 201);

  }

  public function show(Lecture $lecture)
  {
    return $lecture;
  }

  public function update(Request $request, Lecture $lecture)
  {
    $lecture->update($request->all());
    return response()->json($lecture, 200);
  }

  public function destroy(Lecture $lecture)
  {
    $lecture->delete();
    return response()->json(null, 204);
  }
}
