<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pokja extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pokja';
    protected $fillable = ['nama_pokja','keterangan', 'created_at', 'updated_at'];
}
