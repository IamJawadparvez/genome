<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenesData extends Model
{
    use HasFactory;
    protected $table='genome_data';

     protected $fillable = [
       'symbol','locus_type','alias_symbol'
    ];
}
