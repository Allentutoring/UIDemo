<?php

namespace App\Models;

class UIElements extends BaseModel
{
    protected $table = 'ui_elements';

    /*public function scopeLang($query, $lang)
    {
        return $query->where('lang', $lang);
    }*/

    public function information(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UIInformation::class, 'key', 'parent');
    }
}
