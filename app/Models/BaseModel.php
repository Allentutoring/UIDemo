<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes;

    protected $primaryKey = "id";
    public $timestamps = true;
    protected $guarded = [];
    protected $hidden = [];

}
