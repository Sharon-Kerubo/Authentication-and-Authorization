<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [
               'first_name'=>'Tribore','last_name'=>'Health',
               'phone_number'=>'0792651712','email'=>'contact@triboreheath.com',
               'password'=>'$2y$12$ad7Spme/bC8oQt6JQdbvm./84xtYsvUnYMvHhAF6/anlRyl.J7WQS',
               'next_of_kin_first_name'=>'Tribore','next_of_kin_last_name'=>'Health',
               'next_of_kin_email'=>'info@triborehealth.com',
               'next_of_kin_phone'=>'0792651712','role_id'=>'1'
           ]
        ]);
    }
}
