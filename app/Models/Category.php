<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id'];

    public function test() :HasMany
    {
        return $this->hasMany(TestType::class, 'category_id', 'id');
    }
}
