<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['playlist_id', 'title', 'artist', 'duration', 'file_path', 'image', 'genre_id', ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
