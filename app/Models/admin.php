<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    // use HasFactory;
    protected $table='admin';
    protected $primarykey='id';
    protected $fillable=['Email','Pass'];
}
