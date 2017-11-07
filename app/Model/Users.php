<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'users';
    protected $fillable = ['nip','nama','pangkat','golongan','jabatan','password','level','flag_active', 'created_at', 'updated_at'];
}
