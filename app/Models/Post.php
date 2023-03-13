<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;

/**
 * @method array insert($array);
 */

class Post extends Model
{
    protected $fillable = ['title','body','user_by'];
}
