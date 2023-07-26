<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationFoto extends Model
{
    use HasFactory;
    protected $table = 'destinationfoto';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
}
