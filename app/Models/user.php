<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'user';

    // Menentukan kunci utama tabel
    protected $primaryKey = 'id_user';

    public $timestamps = false; // Menonaktifkan timestamp

    // Menentukan bahwa kunci utama bukan tipe incrementing
    public $incrementing = false;

    // Menentukan tipe data kunci utama
    protected $keyType = 'string';

    // Menentukan atribut yang bisa diisi secara massal
    protected $fillable = [
        'id_user',
        'nama_user',
        'username',
        'password',
        'email',
        'no_hp',
        'wa',
        'pin',
        'id_jenis_user',
        'status_user',
        'delete_mark',
        'create_by',
        'create_date',
        'update_by',
        'update_date'
    ];

    // Menentukan atribut yang harus di-cast ke tipe data lain
    protected $casts = [
        'create_date' => 'datetime',
        'update_date' => 'datetime',
    ];

    // Menentukan atribut yang disembunyikan dalam array dan JSON
    protected $hidden = [
        'password',
    ];
}
