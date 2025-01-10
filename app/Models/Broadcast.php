<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_broadcast', 'id_template', 'image', 'message', 'button_text', 'button_url'
    ];
}
