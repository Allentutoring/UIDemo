<?php

namespace App\Models;

class Lang extends BaseModel
{
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    protected $table = 'lang';
}
