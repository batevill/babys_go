<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $table = 'diaries';

    protected $fillable = [
        'child_id',
        'title',
        'description',
        'cover_image_url',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function entries()
    {
        return $this->hasMany(DiaryEntry::class);
    }
}
