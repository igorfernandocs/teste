<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 2,
            ),
            5 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 2,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 4,
                'role_id' => 2,
            ),
            9 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 2,
            ),
            11 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            13 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 7,
                'role_id' => 2,
            ),
            15 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 8,
                'role_id' => 2,
            ),
            17 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 9,
                'role_id' => 2,
            ),
            19 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 10,
                'role_id' => 2,
            ),
            21 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            23 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 12,
                'role_id' => 2,
            ),
            25 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 13,
                'role_id' => 2,
            ),
            27 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            29 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            31 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 21,
                'role_id' => 2,
            ),
            33 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            35 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            37 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 24,
                'role_id' => 2,
            ),
            39 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 25,
                'role_id' => 2,
            ),
            41 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 41,
                'role_id' => 2,
            ),
            43 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            44 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 42,
                'role_id' => 2,
            ),
            46 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            47 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 43,
                'role_id' => 2,
            ),
            49 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            50 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            51 => 
            array (
                'permission_id' => 44,
                'role_id' => 2,
            ),
            52 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            53 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 45,
                'role_id' => 2,
            ),
            55 => 
            array (
                'permission_id' => 45,
                'role_id' => 3,
            ),
            56 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 46,
                'role_id' => 2,
            ),
            58 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            59 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 47,
                'role_id' => 2,
            ),
            61 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            62 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 48,
                'role_id' => 2,
            ),
            64 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            65 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 49,
                'role_id' => 2,
            ),
            67 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            68 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 50,
                'role_id' => 2,
            ),
            70 => 
            array (
                'permission_id' => 50,
                'role_id' => 3,
            ),
            71 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 56,
                'role_id' => 2,
            ),
            73 => 
            array (
                'permission_id' => 56,
                'role_id' => 3,
            ),
            74 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 57,
                'role_id' => 2,
            ),
            76 => 
            array (
                'permission_id' => 57,
                'role_id' => 3,
            ),
            77 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
            79 => 
            array (
                'permission_id' => 58,
                'role_id' => 3,
            ),
            80 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 59,
                'role_id' => 2,
            ),
            82 => 
            array (
                'permission_id' => 59,
                'role_id' => 3,
            ),
            83 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            84 => 
            array (
                'permission_id' => 60,
                'role_id' => 2,
            ),
            85 => 
            array (
                'permission_id' => 60,
                'role_id' => 3,
            ),
            86 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 61,
                'role_id' => 2,
            ),
            88 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            89 => 
            array (
                'permission_id' => 62,
                'role_id' => 2,
            ),
            90 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 63,
                'role_id' => 2,
            ),
            92 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            93 => 
            array (
                'permission_id' => 64,
                'role_id' => 2,
            ),
            94 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 65,
                'role_id' => 2,
            ),
            96 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 66,
                'role_id' => 2,
            ),
            98 => 
            array (
                'permission_id' => 66,
                'role_id' => 3,
            ),
            99 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 67,
                'role_id' => 2,
            ),
            101 => 
            array (
                'permission_id' => 67,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 68,
                'role_id' => 2,
            ),
            104 => 
            array (
                'permission_id' => 68,
                'role_id' => 3,
            ),
            105 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 69,
                'role_id' => 2,
            ),
            107 => 
            array (
                'permission_id' => 69,
                'role_id' => 3,
            ),
            108 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 70,
                'role_id' => 2,
            ),
            110 => 
            array (
                'permission_id' => 70,
                'role_id' => 3,
            ),
        ));
        
        
    }
}