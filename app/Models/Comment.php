<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $filable = ["content", "user_id", "product_id"];

    public function user(){
        return $this->belongsTo(User::class);   
    }
}
