<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	// Insert some stuff
        DB::table('clients')->insert(
            array(
                'id'      => 1,
                'name'    => 'client',
                'code'    => 1,
                'email'   => 'client@email.com',
                'country' => 'Egypt',
                'city'    => 'Cairo',
                'phone'   => '0123456789',
                'adresse' => 'Helwan',
            )
            
        );
    }
}
