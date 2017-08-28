<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('friends')->insert([
         [ 'name'=>'Petras',
           'birthday'=>'1990-01-01',
           'phone'=>'8695034405',
           'photo'=>'friends/img.jpg'
         ],
         [ 'name'=>'Laima',
           'birthday'=>'1992-01-01',
           'phone'=>'869503422',
           'photo'=>'friends/img.jpg'
         ],
         [ 'name'=>'Dalia',
           'birthday'=>'1993-01-01',
           'phone'=>'8695034333',
           'photo'=>'friends/img.jpg'
         ]

         ]);
     }

}
