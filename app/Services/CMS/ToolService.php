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
        $savedIds = [];
        $created = [];

        foreach ($tools as $index => $tool) {

            $toolId = $tool['id'] ?? null;

            /*
        |--------------------------------------------------------------------------
        | FIND EXISTING
        |--------------------------------------------------------------------------
        */

            $existing = null;

            if ($toolId) {
                $existing = Tool::where('id', $toolId)
                    ->where('user_id', $userId)
                    ->first();
            }

            /*
        |--------------------------------------------------------------------------
        | DEFAULT EXISTING LOGO
        |--------------------------------------------------------------------------
        */

            $imageUrl = $existing->logo ?? null;

            /*
        |--------------------------------------------------------------------------
        | CHECK FILE INPUT
        |--------------------------------------------------------------------------
        */

            if (!empty($files[$index]['logo'] ?? null)) {

                $uploaded = $this->fileUploadService->uploadFile(
                    $files[$index]['logo'],
                    "tools/$userId"
                );

                $imageUrl = $uploaded[0] ?? null;
            }

            /*
        |--------------------------------------------------------------------------
        | UPDATE
        |--------------------------------------------------------------------------
        */

            if ($existing) {

                $existing->update([
                    'logo' => $imageUrl,
                    'title' => $tool['title'] ?? null,
                    'description' => $tool['desc'] ?? null,
                    'years_experience' => $tool['years'] ?? null,
                ]);

                $savedIds[] = $existing->id;
                $created[] = $existing;

                continue;
            }

            /*
        |--------------------------------------------------------------------------
        | CREATE
        |--------------------------------------------------------------------------
        */

            $newTool = Tool::create([
                'user_id' => $userId,
                'logo' => $imageUrl,
                'title' => $tool['title'] ?? null,
                'description' => $tool['desc'] ?? null,
                'years_experience' => $tool['years'] ?? null,
            ]);

            $savedIds[] = $newTool->id;
            $created[] = $newTool;
        }

        /*
    |--------------------------------------------------------------------------
    | DELETE REMOVED
    |--------------------------------------------------------------------------
    */

        Tool::where('user_id', $userId)
            ->whereNotIn('id', $savedIds)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tools saved successfully',
            'data' => $created
        ]);
    }
}
