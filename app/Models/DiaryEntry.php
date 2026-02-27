<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaryEntry extends Model
{
    protected $table = 'diary_entries';

    protected $fillable = [
        'diary_id',
        'event_type',
        'title',
        'content',
        'media_url',
        'event_date',
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'datetime',
        ];
    }

    public function diary()
    {
        return $this->belongsTo(Diary::class);
    }
}
