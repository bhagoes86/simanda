<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Perusahaan extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'perusahaan';
    protected $fillable = ['nama_perusahaan','sertifikasi','nama_pimpinan','telp','email','alamat','nomor_siup','flag_jenis_siup','flag_active', 'created_at', 'updated_at'];
}
