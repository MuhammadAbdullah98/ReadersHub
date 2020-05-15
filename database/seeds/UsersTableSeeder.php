<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Abdullah',
            'email' => 'k163804@nu.edu.pk',
             'password' => Hash::make('hello123'),
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        factory(App\User::class,1000)->create();

    }
}
