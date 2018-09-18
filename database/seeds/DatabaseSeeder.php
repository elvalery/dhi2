<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(AdminTablesSeeder::class);
    $this->call(AdminServiceSeeder::class);
    $this->call(AdminJobFixSeeder::class);
    $this->call(AdminContactsSeeder::class);
    $this->call(AdminNewsSeeder::class);
  }
}
