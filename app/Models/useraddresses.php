<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useraddresses extends Model
{
    use HasFactory;

    protected $fillable = ['address','city','state','postcode'];

}
