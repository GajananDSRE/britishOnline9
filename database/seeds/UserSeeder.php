<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Vaishali',
            'userid' => 'vaishali07',            
            'password' => Hash::make('password'),
            'contact' => '1234567896',
            'token' => 'fdf45#@$#$%$%54645443dfgdfdgfg',
            'is_lock_user' => '0',
            'site' => null,
            'whatsapp_no' => '7854125478',
            'country' => 'India',
            'profile' => null,
            'parents' => null,
            'balance' => null,
            'remember_token' => null,
        ]);
    }
}
