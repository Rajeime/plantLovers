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

    function scopeFilter($query, array $filters){
        if (!empty($filters['search'])) {
            $searchTerm = '%' . $filters['search'] . '%';
    
            $query->where(function ($query) use ($searchTerm) {
                $query->where('genus', 'like', $searchTerm)
                    ->orWhere('species', 'like', $searchTerm)
                    ->orWhere('common_name', 'like', $searchTerm);
            });

            // return $query;
        }
        
        // add more filters here as needed
    
        return $query;
    }
}
