<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   
class UsersPokja extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'users_pokja';
    protected $fillable = ['id_user','id_pokja','flag_active', 'created_at', 'updated_at'];
}
