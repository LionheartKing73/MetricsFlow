<?php

use Illuminate\Database\Seeder;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('user_info')->insert([
       //      'user_id' => '10',
       //      'name' => 'Verafin',
       //      'logo' => 'img/portfolio_verafin.png'
       //  ]);

       DB::table('user_info')->insert([
            'user_id' => '1',
            'name' => 'Metricsflow',
            'logo' => 'img\isaac.PNG'
        ]);
    }
}
