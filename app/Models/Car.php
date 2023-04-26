<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table='cars';
    protected $pimaryKey='id';
    protected $fillable=['Brand','Model','Registration_Number','Owners_id'];
    
    public function img(){
        return $this->hasMany(Picture::class,'Cars_id');}
    
        public function owner(){
    return $this->belongsTo(Owner::class,'Owners_id');
    }

}
