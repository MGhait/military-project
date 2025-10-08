<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestUnit extends Model
{
    protected $table = 'test_units';
    protected $guarded = ['id'];

    public function test() : BelongsTo
    {
        return $this->belongsTo(TestType::class, 'test_type_id', 'id');
    }
}
