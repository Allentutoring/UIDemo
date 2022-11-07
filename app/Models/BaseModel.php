<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $primaryKey = "id";
    public $timestamps = true;
    protected $guarded = [];
    protected $hidden = [];

}
