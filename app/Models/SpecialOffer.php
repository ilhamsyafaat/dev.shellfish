<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    use HasFactory;
    protected $table = 'specialoffer';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
