<?php

namespace App\Models;

class UIElements extends BaseModel
{
    protected $table = 'ui_elements';

    protected $hidden = ['id', 'ui_information_key', 'created_at', 'updated_at', 'deleted_at'];

    public function scopeLang($query, $lang)
    {
        return $query->where('lang', $lang);
    }

    public function information(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UIInformation::class, 'ui_information_key', 'key');
    }
}
