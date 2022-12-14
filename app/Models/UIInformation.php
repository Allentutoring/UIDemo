<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UIInformation extends BaseModel
{
    use HasFactory;

    protected $table = 'ui_information';
    protected $keyType = 'string';
    protected $primaryKey = "code";

    public function elements(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UIElements::class, 'ui_information_code', 'code');
    }
}
