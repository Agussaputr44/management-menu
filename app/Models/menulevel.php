<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menulevel extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika berbeda dari nama model dalam bentuk plural)
    protected $table = 'menu_level';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'level_name', // Misalnya, nama level menu
    ];

    // Relasi satu ke banyak dengan model Menu
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
