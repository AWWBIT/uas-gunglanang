<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class loginSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblogin')->insert(
        	array(
        			[
        				'KodeLogin'		=>	'1001',
        				'Username'		=>	'admin',
        				'Password'		=>	'admin123',
        				'NamaLengkap'	=>	'admin_admin',
        				'Level'			=>	'Admin'
        			]
        		)
        );
    }
}
