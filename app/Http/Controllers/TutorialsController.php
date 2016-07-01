<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tutorial as Tutorial;

class TutorialsController extends Controller
{
  public function getTutorials()
  {
    $tutorials = Tutorial::latest()->with('category')->with('comment')->with('rating')->get();
    return $tutorials;
  }

  public function getTutorial($id)
  {
    $tutorial = Tutorial::where('id', '=', $id)->with('comment')->get();
    return $tutorial;
  }
}
