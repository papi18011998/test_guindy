<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.list', compact('categories'));
    }

    public function delete($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.list');
    }
}
