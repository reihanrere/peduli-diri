<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = "perjalanans";

    protected $fillable = [
        "id_perjalanan",
        "tanggal",
        "jam",
        "lokasi",
        "suhu_tubuh",
        "user_id",
        "status",
    ];

    protected $primaryKey = "id_perjalanan";
}
