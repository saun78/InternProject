<?php

namespace App\Models;

use App\Http\Controllers\usercontroller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logins extends Model
{
    use HasFactory;

    protected $fillable=['name','email','password'];

}
