<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "registro";
    protected $fillable = ["nome","datanasc","num"];
}
