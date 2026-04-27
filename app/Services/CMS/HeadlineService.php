<?php

namespace App\Services\CMS;

use App\Models\Headline;

class HeadlineService
{
    public function save($userId, $data)
    {
        $headline = Headline::updateOrCreate(
            ['user_id' => $userId],
            [
                'main' => $data['main'] ?? null,
                'sub'  => $data['sub'] ?? null,
                'cta'  => $data['cta'] ?? null,
                'background'  => $data['background'] ?? null,
            ]
        );
        // dd('rerere');
        return response()->json([
            'success' => true,
            'message' => 'Headline saved successfully',
            'data' => $headline
        ]);
    }

    public function get($userId)
    {
        $headline = Headline::where('user_id', $userId)->first();

        return response()->json([
            'success' => true,
            'message' => 'Headline fetched successfully',
            'data' => $headline
        ]);
    }
}
