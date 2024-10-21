<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable = ['no_telepon', 'email', 'alamat'];
    protected $visible = ['no_telepon', 'email', 'alamat'];
}
