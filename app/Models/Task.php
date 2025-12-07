<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Task extends Model
{
    use HasFactory;
   protected $table = 'tasks' ;
   protected $primaryKey = 'id'; 
   protected $fillable = ['title','description','deadline'];

   protected $casts = [
                'status'=>'string',
                'deadline' => 'datetime',
   ];   

   //Refer the User Model: 
      public function user(){
        return $this->belongsTo(User::class);
      }
}
