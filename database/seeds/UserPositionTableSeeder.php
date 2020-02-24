<?php

use Illuminate\Database\Seeder;

class UserPositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->delete();
        \DB::table('positions')->delete();

        factory(App\Position::class, 5)->create()->each(function($u){
          $u->users()
              ->saveMany(
                    factory(App\User::class, rand(1,5))->make()
                );

       });
    }
}
