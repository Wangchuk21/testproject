<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 't_user_master';
    protected $fillable = [
        'full_name',
        'contact_no',
        'email',
        'password',
        'role_id',
    ];
}
