<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutionlist extends Model
{
    protected $table ='tutionlists';
    use HasFactory;
    protected $guarded =[];
    public function hastutor(){

        return $this->belongsTo(User::class,'tutor_id','id');
     }
     public function hassubject()
 {
     return $this->belongsTo(Tution::class,'tution_id','id');
 } 
 public function studentR(){

    return $this->belongsTo(User::class,'student_id','id');
 }


}

