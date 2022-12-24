<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lipstick extends Model
{
    use HasFactory;
    protected $table='lipstick'; //why is this important to add?

    protected $fillable = ['BrandName', 'Price' , 'Shade', 'Color','MadeIn','Image'];
}
