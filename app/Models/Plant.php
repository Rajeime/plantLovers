<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        "common_name",
        "genus",
        "species",
        "user_id",
        "img"
    ];

    function user(){
        $this->belongsTo(User::class);
    }
}
