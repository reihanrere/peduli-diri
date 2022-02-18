<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $table = 'kotas';

    protected $fillable = [
        'id',
        'nama'
    ];

    protected $primaryKey = 'id';
}
