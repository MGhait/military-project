<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestResult extends Model
{
    protected $table = 'test_res';
    protected $guarded = ['id'];

    public function testOrder() : BelongsTo
    {
        return $this->belongsTo(TestOrder::class, 'test_order_id', 'id');
    }

    public function test() : BelongsTo
    {
        return $this->belongsTo(TestType::class, 'test_type_id', 'id');
    }
}
