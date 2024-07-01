<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'menu';

    // Primary key dari tabel
    protected $primaryKey = 'menu_id';

    // Primary key bukan tipe auto incrementing integer
    public $incrementing = false;

    public $timestamps = false; // Disable automatic timestamps


    // Tipe primary key bukan integer
    protected $keyType = 'string';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'menu_id',
        'id_level',
        'menu_name',
        'menu_link',
        'menu_icon',
        'parent_id',
        'create_by',
        'create_date',
        'delete_mark',
        'update_by',
        'update_date',
    ];

    // Relasi ke model Menulevel
    public function menulevel()
    {
        return $this->belongsTo(Menulevel::class, 'id_level', 'id_level');
    }
}
