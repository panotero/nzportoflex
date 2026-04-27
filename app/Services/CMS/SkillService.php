<?php

namespace App\Services\CMS;

use App\Models\Skill;

class SkillService
{
    public function saveAll($userId, $skills)
    {
        Skill::where('user_id', $userId)->delete();

        $created = [];

        foreach ($skills as $skill) {
            $created[] = Skill::create([
                'user_id' => $userId,
                'title' => $skill['title'],
                'description' => $skill['description'] ?? null,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Skills saved successfully',
            'data' => $created
        ]);
    }

    public function all($userId)
    {
        $skills = Skill::where('user_id', $userId)->get();

        return response()->json([
            'success' => true,
            'message' => 'Skills fetched successfully',
            'data' => $skills
        ]);
    }
}
