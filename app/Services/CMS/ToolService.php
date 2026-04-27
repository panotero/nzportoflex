<?php

namespace App\Services\CMS;

use App\Models\Tool;
use App\Services\FileUploadService;

class ToolService
{
    public function __construct(
        protected FileUploadService $fileUploadService,
    ) {}

    public function all($userId)
    {
        return Tool::where('user_id', $userId)->get();
    }

    public function saveAll($userId, $tools, $files)
    {
        Tool::where('user_id', $userId)->delete();

        $created = [];
        foreach ($tools as $index => $tool) {

            $imageUrl = null;

            if (!empty($files[$index]['logo'] ?? null)) {

                $uploaded = $this->fileUploadService->uploadFile(
                    $files[$index]['logo'],
                    "tools/$userId"
                );

                $imageUrl = $uploaded[0] ?? null;
            }

            $created[] = Tool::create([
                'logo' => $imageUrl,
                'user_id' => $userId,
                'title' => $tool['title'] ?? null,
                'description' => $tool['desc'] ?? null,
                'years_experience' => $tool['years'] ?? null,
            ]);
        }


        return response()->json([
            'success' => true,
            'message' => 'Tools saved successfully',
            'data' => $created
        ]);
    }
}
