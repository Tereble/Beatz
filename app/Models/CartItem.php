<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'song_id', 'license_id', 'quantity', 'price'];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    public function license()
    {
        return $this->belongsTo(License::class);
    }
}
