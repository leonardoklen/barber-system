<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    use HasFactory;
    protected $table = 'scheduling' ;
    protected $fillable = ['date_time', 'id_service', 'name', 'phone'];
}
