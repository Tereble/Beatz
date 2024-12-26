<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
