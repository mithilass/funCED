<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComments extends Model
{
    use HasFactory;
    protected $table = "usercomments";
    protected $fillable = [
        // 'name',
        'comments',
        // 'like',
        // 'user_type',
        'unqId',
        'created_at',
        'updated_at'        

    ];
    protected $primaryKey = 'unqId';
}
