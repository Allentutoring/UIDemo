<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UICondition extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'operator' => $this->operator_code,
            'type' => $this->type,
            'target' => $this->target,
            'value' => $this->value,
        ];
    }
}
