<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;

class AdminServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Permission::insert([
        [
          'name'        => 'Service',
          'slug'        => 'service',
          'http_method' => '',
          'http_path'   => "/content/service*",
        ],
        [
          'name'        => 'Jobs',
          'slug'        => 'jobs',
          'http_method' => '',
          'http_path'   => "/content/jobs*",
        ],
      ]);

      Role::find(2)->permissions()->saveMany(
        [
          Permission::find(7),
          Permission::find(8),
        ]);

      Menu::insert([
        [
          'parent_id' => 0,
          'order'     => 9,
          'title'     => 'Service',
          'icon'      => 'fa-briefcase',
          'uri'       => '/content/service',
        ],
        [
          'parent_id' => 0,
          'order'     => 10,
          'title'     => 'Job',
          'icon'      => 'fa-user-plus',
          'uri'       => '/content/job',
        ],

      ]);

      // add role to menu.
      Menu::find(9)->roles()->saveMany([Role::find(2), Role::find(1)]);
      Menu::find(10)->roles()->saveMany([Role::find(2), Role::find(1)]);

      Menu::where('title', 'Portfolio')->update(['icon' => 'fa-university']);
    }
}
