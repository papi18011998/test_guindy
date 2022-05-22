<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Imports\ProduitImport;
use App\Imports\MultiSheetImport;
use Maatwebsite\Excel\Facades\Excel;

class ProduitController extends Controller
{
    public function importForm()
    {
        return view('produits.import');
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,ods'
        ]);
       $file = $request->file('file');

    Excel::import(new MultiSheetImport, $file);
        return redirect()->route('produits.list');
    }
    public function index()
    {
        $produits = Produit::all();
        return view('produits.list', compact('produits'));
    }
}
