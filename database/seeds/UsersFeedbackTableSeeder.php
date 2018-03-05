<?php

use Illuminate\Database\Seeder;

class UsersFeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('feedback')->truncate();

      factory(App\Feedback::class,2500)->create();
    }
}
