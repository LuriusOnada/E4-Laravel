<?php

use Illuminate\Database\Seeder;

class AlbumImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('album_image')->delete();
        
        \DB::table('album_image')->insert(array (
            0 => 
            array (
                'album_id' => 2,
                'image_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'album_id' => 2,
                'image_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'album_id' => 1,
                'image_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'album_id' => 3,
                'image_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'album_id' => 2,
                'image_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'album_id' => 3,
                'image_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'album_id' => 1,
                'image_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'album_id' => 1,
                'image_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'album_id' => 3,
                'image_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'album_id' => 1,
                'image_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'album_id' => 2,
                'image_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'album_id' => 2,
                'image_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
