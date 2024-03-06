<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDetail extends Model
{
    use HasFactory;

    protected $fillable = ['deskripsi', 'tanggal_ubah'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
