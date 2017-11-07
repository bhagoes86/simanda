<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pekerjaan extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'kategori_kegiatan';
    protected $fillable = ['nama_kategori','created_at', 'updated_at'];
}
