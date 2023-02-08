<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xlsx extends Model
{
    use HasFactory;
    protected $fillable = ['Body','Subject','Characters'];
}
