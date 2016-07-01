<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User as User;

class UsersController extends Controller
{
    public function getUsers()
    {
      $users = User::all();
      return $users;
    }
}
