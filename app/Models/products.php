<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //use HasFactory;
    protected $table='product';
    protected $primaryKey='id';
    protected $fillable=['img','path','name','price'];
}
