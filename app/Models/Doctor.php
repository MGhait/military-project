<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $guarded = ['id'];

    public function testOrder() : HasMany
    {
        return $this->hasMany(TestOrder::class, 'doctor_id', 'id');
    }
}
