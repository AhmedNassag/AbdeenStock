<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id'            => 1,
                'email'         => 'mohamedabdeen@email.com',
                'currency_id'   => 1,
                'client_id'     => 1,
                'warehouse_id'  => Null,
                'CompanyName'   => 'Abdeen',
                'CompanyPhone'  => '0123456789',
                'CompanyAdress' => 'Helwan,Cairo,Egypt',
                'footer'        => 'Abdeen - Kayan Stock',
                'developed_by'  => 'Eng.Ahmed Nabil',
                'logo'          => 'logo-default.png',
            )
            
        );
    }
}
