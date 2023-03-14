<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Owner extends Model
{
    use HasFactory;
    protected $table='_owners';
    protected $pimaryKey='id';
    protected $fillable=['Name','Surname','Phone_Number','Age'];
   
    public function cars(){
    return $this->hasMany(Car::class,'Owners_id');}
public function scopefilter(Builder $query,$filter){
if($filter->Name!=null){
    $query->where('Name','like',"%$filter->Name%");
}
if($filter->Surname!=null){
    $query->where('Surname','like',"%$filter->Surname%");
}
if($filter->Phone_Number!=null){
    $query->where('Phone_Number',$filter->Phone_Number);
}
if($filter->Age!=null){
    $query->where('Age',$filter->Age);
}

}
public function scopeAge(Builder $query,$filter){
$query->where('Age',$age);
$query->where('Phone_Number',$Phone_Number);
}
}

