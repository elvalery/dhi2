<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Permission;

class AdminJobFixSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Permission::find(8)->update(['http_path' => '/content/job*']);
  }
}
