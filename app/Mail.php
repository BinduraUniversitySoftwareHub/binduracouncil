<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
     public function user()
    {
        return $this->belongsTo(Mail::class,'userId');
    }
       public function department()
    {
        return $this->belongsTo(Department::class,'from');
    }
}
