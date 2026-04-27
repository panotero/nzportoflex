<?php

namespace App\Services\CMS;

use App\Models\Project;

class ProjectService
{
    public function all($userId)
    {
        return Project::where('user_id', $userId)->get();
    }

    public function saveAll($userId, $projects)
    {
        Project::where('user_id', $userId)->delete();


        $created = [];

        foreach ($projects as $project) {
            $created[] = Project::create([
                'user_id' => $userId,
                'title' => $project['title'],
                'duration' => $project['duration'] ?? null,
                'description' => $project['desc'] ?? null,
                'project_url' => $project['link'] ?? null,
                'url_type' => $project['type'] ?? null,
                'photos' => $project['photos'] ?? [],
                'skills' => $project['skill'] ?? [],
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Projects saved successfully',
            'data' => $created
        ]);
    }
}
