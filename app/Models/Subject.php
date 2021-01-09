<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table ='subjects';
    protected $guarded =[];


 public function group()
 {
     return $this->belongsTo(Group::class);
 } 
 public function classnumber()
 {
     return $this->belongsTo(Classnumber::class);
 }
 
}
