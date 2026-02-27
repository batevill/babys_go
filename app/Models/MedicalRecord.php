<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $table = 'medical_records';

    protected $fillable = [
        'child_id',
        'record_type',
        'title',
        'date_administered',
        'doctor_name',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'date_administered' => 'date',
        ];
    }

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
