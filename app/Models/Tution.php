<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tution extends Model
{
    protected $table ='tutions';
    protected $guarded =[];
    use HasFactory;

    public function subjectname()
 {
     return $this->belongsTo(Subject::class,'name_id','id');
 } 
 public function groupname()
 {
     return $this->belongsTo(Group::class,'group_id','id');
 } 
 public function hasclass()
 {
     return $this->belongsTo(Classnumber::class,'classnumber_id','id');
 }


 public function tutor(){


    return $this->belongsTo(User::class,'tutor_id','id');
 }
 
}
