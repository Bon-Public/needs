<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // protect from mass assignment vulnerabilities
    protected $fillable = [ 'type', 'name', 'state', 'desc', 'user_id'];
}
