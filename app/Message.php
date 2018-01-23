<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'session_id', 'admin', 'message',
    ];

    protected $table = 'messages';

    
    

}
