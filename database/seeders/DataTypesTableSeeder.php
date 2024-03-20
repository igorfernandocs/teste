<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'playlists',
                'slug' => 'playlists',
                'display_name_singular' => 'Série',
                'display_name_plural' => 'Séries',
                'icon' => 'voyager-play',
                'model_name' => 'App\\Models\\Playlist',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-03-11 15:34:28',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'seasons',
                'slug' => 'seasons',
                'display_name_singular' => 'Season',
                'display_name_plural' => 'Seasons',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Models\\Season',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-02-19 07:07:32',
            ),
            4 => 
            array (
                'id' => 13,
                'name' => 'episodes',
                'slug' => 'episodes',
                'display_name_singular' => 'Episódio',
                'display_name_plural' => 'Episódios',
                'icon' => 'voyager-video',
                'model_name' => 'App\\Models\\Episode',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-18 17:49:33',
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-11 16:03:58',
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'scheduling_banners',
                'slug' => 'scheduling-banners',
                'display_name_singular' => 'Banner Agendamento',
                'display_name_plural' => 'Banners Agendamento',
                'icon' => 'voyager-images',
                'model_name' => 'App\\Models\\SchedulingBanner',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:51:15',
            ),
        ));
        
        
    }
}