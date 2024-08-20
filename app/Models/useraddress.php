<?php

namespace App\Models;

use App\Http\Controllers\indexcontroller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $fillable=['city','state','postcode'];

}
