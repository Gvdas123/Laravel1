<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $table='_pictures';
    protected $pimaryKey='id';
    protected $fillable=['image','Cars_id'];
    public function car(){
    return $this->belongsTo(Car::class,'Cars_id');
    }
}
