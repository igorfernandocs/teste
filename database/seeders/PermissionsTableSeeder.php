<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            15 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            16 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            17 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            18 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            19 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2024-02-14 05:55:00',
                'updated_at' => '2024-02-14 05:55:00',
            ),
            20 => 
            array (
                'id' => 41,
                'key' => 'browse_playlists',
                'table_name' => 'playlists',
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-02-19 06:38:43',
            ),
            21 => 
            array (
                'id' => 42,
                'key' => 'read_playlists',
                'table_name' => 'playlists',
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-02-19 06:38:43',
            ),
            22 => 
            array (
                'id' => 43,
                'key' => 'edit_playlists',
                'table_name' => 'playlists',
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-02-19 06:38:43',
            ),
            23 => 
            array (
                'id' => 44,
                'key' => 'add_playlists',
                'table_name' => 'playlists',
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-02-19 06:38:43',
            ),
            24 => 
            array (
                'id' => 45,
                'key' => 'delete_playlists',
                'table_name' => 'playlists',
                'created_at' => '2024-02-19 06:38:43',
                'updated_at' => '2024-02-19 06:38:43',
            ),
            25 => 
            array (
                'id' => 46,
                'key' => 'browse_seasons',
                'table_name' => 'seasons',
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-02-19 07:07:32',
            ),
            26 => 
            array (
                'id' => 47,
                'key' => 'read_seasons',
                'table_name' => 'seasons',
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-02-19 07:07:32',
            ),
            27 => 
            array (
                'id' => 48,
                'key' => 'edit_seasons',
                'table_name' => 'seasons',
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-02-19 07:07:32',
            ),
            28 => 
            array (
                'id' => 49,
                'key' => 'add_seasons',
                'table_name' => 'seasons',
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-02-19 07:07:32',
            ),
            29 => 
            array (
                'id' => 50,
                'key' => 'delete_seasons',
                'table_name' => 'seasons',
                'created_at' => '2024-02-19 07:07:32',
                'updated_at' => '2024-02-19 07:07:32',
            ),
            30 => 
            array (
                'id' => 56,
                'key' => 'browse_episodes',
                'table_name' => 'episodes',
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-08 18:19:20',
            ),
            31 => 
            array (
                'id' => 57,
                'key' => 'read_episodes',
                'table_name' => 'episodes',
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-08 18:19:20',
            ),
            32 => 
            array (
                'id' => 58,
                'key' => 'edit_episodes',
                'table_name' => 'episodes',
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-08 18:19:20',
            ),
            33 => 
            array (
                'id' => 59,
                'key' => 'add_episodes',
                'table_name' => 'episodes',
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-08 18:19:20',
            ),
            34 => 
            array (
                'id' => 60,
                'key' => 'delete_episodes',
                'table_name' => 'episodes',
                'created_at' => '2024-03-08 18:19:20',
                'updated_at' => '2024-03-08 18:19:20',
            ),
            35 => 
            array (
                'id' => 61,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-08 18:26:38',
            ),
            36 => 
            array (
                'id' => 62,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-08 18:26:38',
            ),
            37 => 
            array (
                'id' => 63,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-08 18:26:38',
            ),
            38 => 
            array (
                'id' => 64,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-08 18:26:38',
            ),
            39 => 
            array (
                'id' => 65,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2024-03-08 18:26:38',
                'updated_at' => '2024-03-08 18:26:38',
            ),
            40 => 
            array (
                'id' => 66,
                'key' => 'browse_scheduling_banners',
                'table_name' => 'scheduling_banners',
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:42:24',
            ),
            41 => 
            array (
                'id' => 67,
                'key' => 'read_scheduling_banners',
                'table_name' => 'scheduling_banners',
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:42:24',
            ),
            42 => 
            array (
                'id' => 68,
                'key' => 'edit_scheduling_banners',
                'table_name' => 'scheduling_banners',
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:42:24',
            ),
            43 => 
            array (
                'id' => 69,
                'key' => 'add_scheduling_banners',
                'table_name' => 'scheduling_banners',
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:42:24',
            ),
            44 => 
            array (
                'id' => 70,
                'key' => 'delete_scheduling_banners',
                'table_name' => 'scheduling_banners',
                'created_at' => '2024-03-18 15:42:24',
                'updated_at' => '2024-03-18 15:42:24',
            ),
        ));
        
        
    }
}