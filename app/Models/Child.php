<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'children';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'birth_date',
        'birth_weight',
        'birth_height',
        'blood_type',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'birth_weight' => 'decimal:2',
            'birth_height' => 'decimal:2',
        ];
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function diaries()
    {
        return $this->hasMany(Diary::class);
    }

    public function growthRecords()
    {
        return $this->hasMany(GrowthRecord::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }
}
