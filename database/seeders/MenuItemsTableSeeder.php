<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => NULL,
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-20 06:25:55',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-20 06:25:55',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-20 06:25:55',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-20 06:25:55',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Séries',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-play',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.playlists.index',
                'parameters' => 'null',
            ),
            9 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Temporadas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.seasons.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dashboard',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2024-02-20 08:27:57',
                'updated_at' => '2024-02-20 08:31:17',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            11 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Episódios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-video',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.episodes.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Banners Agendamento',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:45:49',
                'route' => 'voyager.scheduling-banners.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}