<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand', 'logo', 'description', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vinyls(){
        return $this->belongsToMany(Vinyl::class);
    }

    
}
