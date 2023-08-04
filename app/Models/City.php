<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'city';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function items()
    {
        return $this->hasMany(Destination::class, 'city_id','id');
    }
}
