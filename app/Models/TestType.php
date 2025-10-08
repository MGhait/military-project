<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TestType extends Model
{
    protected $table = 'test_types';
    protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function result() : HasMany
    {
        return $this->hasMany(TestResult::class, 'test_type_id', 'id');
    }

    public function unit() : HasOne
    {
        return $this->hasOne(TestUnit::class, 'test_type_id', 'id');
    }

    public function reference() : HasOne
    {
        return $this->hasOne(TestReference::class, 'test_type_id', 'id');
    }

}
