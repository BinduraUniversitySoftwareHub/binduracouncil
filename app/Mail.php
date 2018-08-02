<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{  
	 protected $fillable = [
        'status'
    ];
     public function user()
    {
        return $this->belongsTo(User::class,'userId');
    }
       public function department()
    {
        return $this->belongsTo(Department::class,'to');
    }
       public function inbox()
    {
        return $this->belongsTo(Inbox::class,'from');
    }
}
