<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrowthRecord extends Model
{
    protected $table = 'growth_records';

    protected $fillable = [
        'child_id',
        'record_date',
        'weight',
        'height',
        'head_circumference',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'record_date' => 'date',
            'weight' => 'decimal:2',
            'height' => 'decimal:2',
            'head_circumference' => 'decimal:2',
        ];
    }

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
