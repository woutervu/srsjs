<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category as Category;

class CategoriesController extends Controller
{
    public function getCategories()
    {
      $categories = Category::all();
      return $categories;
    }
}
