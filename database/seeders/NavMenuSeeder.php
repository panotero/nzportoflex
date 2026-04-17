<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NavMenu;
use Illuminate\Support\Facades\DB;

class NavMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_array = [
            [
                'title' => 'Dashboard',
                'icon' => 'fas fa-home',
                'link' => '/page_dashboard',
                'allowed_roles' => json_encode(['1', '2', '3', '4']),
                'parent_menu' => '0',
            ],
            [
                'title' => 'User Management',
                'icon' => 'fas fa-users',
                'link' => '/page_users',
                'allowed_roles' => json_encode(['1']),
                'parent_menu' => '0',
            ],
            [
                'title' => 'Developer Option',
                'icon' => 'fas fa-users',
                'link' => '#',
                'allowed_roles' => json_encode(['1']),
                'parent_menu' => '0',
            ],
            [
                'title' => 'Mailer',
                'icon' => '',
                'link' => '/page_mailer',
                'allowed_roles' => json_encode(['1']),
                'parent_menu' => 'Developer Option',
            ],
            [
                'title' => 'Menus',
                'icon' => '',
                'link' => '/page_menus',
                'allowed_roles' => json_encode(['1']),
                'parent_menu' => 'Developer Option',
            ]
        ];

        // Separate parent and child
        $parent_menu = array_values(array_filter($menu_array, fn($menu) => $menu['parent_menu'] === '0'));
        $child_menu = array_values(array_filter($menu_array, fn($menu) => $menu['parent_menu'] !== '0'));

        $parentMap = [];
        $parentOrder = 0;

        // Insert parents with auto order
        foreach ($parent_menu as $menu) {

            $parent = NavMenu::firstOrCreate(
                [
                    'title' => $menu['title']
                ],
                [
                    'icon' => $menu['icon'],
                    'link' => $menu['link'],
                    'allowed_roles' => $menu['allowed_roles'],
                    'parent_menu' => 0,
                    'menu_order' => $parentOrder
                ]
            );

            // Save mapping
            $parentMap[$menu['title']] = $parent->id;

            // Increment parent order
            $parentOrder++;
        }

        // Track child order per parent
        $childOrderMap = [];

        foreach ($child_menu as $menu) {

            $parentTitle = $menu['parent_menu'];
            $parentId = $parentMap[$parentTitle] ?? null;

            if (!$parentId) {
                echo "Skipped {$menu['title']} - parent not found\n";
                continue;
            }

            // Initialize counter per parent
            if (!isset($childOrderMap[$parentId])) {
                $childOrderMap[$parentId] = 0;
            }

            $child = NavMenu::firstOrCreate(
                [
                    'title' => $menu['title'],
                    'parent_menu' => $parentId
                ],
                [
                    'icon' => $menu['icon'],
                    'link' => $menu['link'],
                    'allowed_roles' => $menu['allowed_roles'],
                    'menu_order' => $childOrderMap[$parentId]
                ]
            );

            // Increment child order per parent
            $childOrderMap[$parentId]++;
        }
    }
}
