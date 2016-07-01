<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task as Task;
use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
      return view('main.index');
    }

    public function lists()
    {
      return view('main.lists');
    }

    public function alert()
    {
      return view('main.alert');
    }

    public function taskApp()
    {
      return view('main.taskApp');
    }

    public function getTasks()
    {
      return Task::latest()->get();
    }

    public function getTask($id)
    {
      return Task::find($id);
    }
}
