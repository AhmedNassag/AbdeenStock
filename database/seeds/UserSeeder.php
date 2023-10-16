<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('users')->insert(
            array(
                'id'        => 1,
                'firstname' => 'Mohamed',
                'lastname'  => 'Abdeen',
                'username'  => 'Mohamed Abdeen',
                'email'     => 'mohamedabdeen@email.com',
                'password'  => '$2y$10$lAPhe1a.FaiIzWnZjFsK8eQBZzOhV.jX6ZjBN7MiG7GOBupyx6hv.',
                'avatar'    => 'no_avatar.png',
                'phone'     => '0123456789',
                'role_id'   => 1,
                'statut'    => 1,
            )
        );
    }
}
