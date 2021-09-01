<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JapaneseWordPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'post' => $this->post,
            'selected_words' => $this->selected_words,
        ];
        // return parent::toArray($request);
    }
}
