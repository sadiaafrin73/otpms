<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
protected $table='students';

    protected $guarded =[];
    use HasFactory;
    
    public function studentR()
    {
        return $this->belongsTo(User::class,'user_id','id');
    } 
}
