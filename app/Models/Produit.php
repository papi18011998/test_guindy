<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
