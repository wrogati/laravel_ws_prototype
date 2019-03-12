<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    public $table = 'Product';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
