<?php

use Illuminate\Database\Seeder;

class DonateTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \DB::table('donates')->truncate();

    factory(App\Donate::class,800)->create();
  }
}
