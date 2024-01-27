<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->id,
            'last_name' => $this->last_name,
            'first_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'date_recovery' => $this->date_recovery,
            'date_in' => $this->created_at,
        ];
    }
}
