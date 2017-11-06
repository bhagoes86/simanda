<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dinas extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'dinas';
    protected $fillable = ['nama_dinas','singkatan','kepala_dinas','alamat','flag_active', 'created_at', 'updated_at'];
}
