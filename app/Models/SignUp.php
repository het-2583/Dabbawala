<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    //use HasFactory;
    protected $table='sign';
    protected $primarykey='id';
    protected $fillable=['Name','Phone','Email','Pwd'];
}
