<?php

namespace App\Models;

class UIConditionGroup extends BaseModel
{

    protected $table = 'ui_condition_group';

    public function conditions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UIConditions::class, 'ui_condition_group_id', 'id');
    }

    public function behaviors(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UIBehaviors::class, 'ui_condition_group_id', 'id');
    }
}
