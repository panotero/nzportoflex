<?php

namespace App\Services\CMS;

use App\Models\Contact;

class ContactService
{
    public function save($userId, $data)
    {
        $contact = Contact::updateOrCreate(
            ['user_id' => $userId],
            [
                'email' => $data['email'] ?? null,
                'phone' => $data['phone'] ?? null,
                'social_links' => $data['socials'] ?? [],
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Contact saved successfully',
            'data' => $contact
        ]);
    }

    public function get($userId)
    {
        $contact = Contact::where('user_id', $userId)->first();

        return response()->json([
            'success' => true,
            'message' => 'Contact fetched successfully',
            'data' => $contact
        ]);
    }
}
