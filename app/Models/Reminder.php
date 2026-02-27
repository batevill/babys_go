<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminders';

    protected $fillable = [
        'user_id',
        'child_id',
        'title',
        'description',
        'remind_at',
        'is_sent',
        'recurring_type',
    ];

    protected function casts(): array
    {
        return [
            'remind_at' => 'datetime',
            'is_sent' => 'boolean',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
