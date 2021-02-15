<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    // protected $table='tutors';

    protected $guarded =[];
    use HasFactory;

    
 public function user()
 {
     return $this->belongsTo(User::class);
 } 


public function comments()
{
    return $this->hasMany(Comments::class,'tutor_id','id');
}
 
}
