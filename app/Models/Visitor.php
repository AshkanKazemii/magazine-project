<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Visitor extends Model
{
    use HasFactory;

    protected $table = "shetabit_visits" ;


    

    public function user() 
    {
        return $this->belongsTo(User::class , 'visitor_id' , 'id') ;
    }
}
