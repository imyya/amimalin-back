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
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'username' => $this->username,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'name' => $this->firstname . ' ' . $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'phone2' => $this->phone2,
            'birthday' => $this->birthday,
            // 'jobTypeId' => $this->jobTypeId,
            // 'presentation' => $this->presentation,
            // 'nbChildren' => $this->nbChildren,
            // 'registrationType' => $this->registrationType,
            // 'isDogsitter' => $this->isDogsitter,
            // 'isPremiumDogsitter' => $this->isPremiumDogsitter,
            // 'creationDate' => $this->creationDate,
            // 'lastLoginDate' => $this->lastLoginDate,
            // 'internalNotes' => $this->internalNotes,
            // 'token' => $this->token,
            // 'activation' => $this->activation,
            // 'gclid' => $this->gclid,
            // 'cid' => $this->cid,
            // 'sessionId' => $this->sessionId,
            // 'name' => $this->name,
            // 'email_verified_at' => $this->email_verified_at,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            // 'activation_id' => $this->activation_id,
        ];
    }
}
