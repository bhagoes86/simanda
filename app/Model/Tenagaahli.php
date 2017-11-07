<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tenagaahli extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'tenaga_ahli';
    protected $fillable = ['nama','alamat','telp','email','pendidikan','sertifikasi', 'created_at', 'updated_at'];
}
