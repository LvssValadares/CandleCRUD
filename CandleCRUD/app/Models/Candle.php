<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candle extends Model
{
    protected $fillable = [
        'name',
        'qtd',
        'fragrance',
        'description',
        'image'
    ];
    protected $guarded = [];
    use HasFactory;
}
