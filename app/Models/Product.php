<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @param Collection<array-key,mixed> $states
     */
    public static function factory(int $count = null): ProductFactory
    {
        return new ProductFactory($count);
    }
}
