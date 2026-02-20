<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * @param Collection<array-key,mixed> $states
     */
    public static function factory(int $count = null): ProductFactory
    {
        return new ProductFactory($count);
    }
}
