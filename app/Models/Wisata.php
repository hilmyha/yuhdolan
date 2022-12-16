<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
