<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestReference extends Model
{
    protected $table = 'test_references';
    protected $guarded = ['id'];

    public function test(): BelongsTo
    {
        return $this->belongsTo(TestType::class, 'test_type_id', 'id');
    }
}
