<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = [
        'pembayaran', 'buruh_a', 'buruh_b', 'buruh_c'
    ];

    protected $hidden = [];
}
