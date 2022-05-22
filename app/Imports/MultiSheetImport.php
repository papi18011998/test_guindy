<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Imports\CategorieImport;

class MultiSheetImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            0=>new CategorieImport,
            1=>new ProduitImport,
        ];
    }

}
