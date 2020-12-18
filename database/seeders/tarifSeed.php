<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tarifSeed extends Seeder
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
        				'KodeTarif'		=>	'2001',
        				'Daya'			=>	'500',
        				'TarifPerKwh'	=>	'12000',
        				'Beban'			=>	'500'
        			],
        			[
        				'KodeTarif'		=>	'2002',
        				'Daya'			=>	'1500',
        				'TarifPerKwh'	=>	'40000',
        				'Beban'			=>	'1000'
        			]
        		)
        );
    }
}
