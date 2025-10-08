<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TestOrder extends Model
{
    protected $table = 'test_orders';
    protected $guarded = ['id'];

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function doctor() : BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function testResult() : HasMany
    {
        return $this->hasMany(TestResult::class, 'test_order_id', 'id');
    }
}
