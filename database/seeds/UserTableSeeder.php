<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@colegiodeobstetrasdelperu.org',
                'password' => bcrypt('123bbb456'),
                'estado' => 1,
                'role_id' => 1,
                'store_id' => 1,
                'image' => '/images/users/default.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);


    }
}
