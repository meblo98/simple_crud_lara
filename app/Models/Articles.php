<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'image',
        'categorie',
        'description',
    ];
    use HasFactory;
}
