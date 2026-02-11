<?php

namespace App\Models;

use Database\Factories\BlogFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Blog extends Model
{
    /**
     * @param Collection<array-key,mixed> $states
     */
    public static function factory(int $count = null): BlogFactory
    {
        return new BlogFactory($count);
    }
}
