<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    protected $table = 'patients';
    protected $guarded = ['id'];

    public function testOrder() : HasMany
    {
        return $this->hasMany(TestOrder::class, 'patient_id', 'id');
    }
}
