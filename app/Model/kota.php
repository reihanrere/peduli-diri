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

    public function User(){
        return $this->hasMany('App\User', 'kota_id','id');
    }

}
