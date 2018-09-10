<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;

class AdminTablesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // create a user.
    Administrator::truncate();
    Administrator::create([
      'username' => 'admin',
      'password' => bcrypt('admin'),
      'name'     => 'Administrator',
    ]);

    Administrator::create([
      'username' => 'manager',
      'password' => bcrypt('qwerty'),
      'name'     => 'Content Manager',
    ]);

    // create a role.
    Role::truncate();
    Role::create([
      'name' => 'Administrator',
      'slug' => 'administrator',
    ]);

    Role::create([
      'name' => 'Content Manager',
      'slug' => 'manager',
    ]);

    // add role to user.
    Administrator::first()->roles()->save(Role::first());
    Administrator::find(2)->roles()->save(Role::find(2));

    //create a permission
    Permission::truncate();
    Permission::insert([
      [
        'name'        => 'All permission',
        'slug'        => '*',
        'http_method' => '',
        'http_path'   => '*',
      ],
      [
        'name'        => 'Dashboard',
        'slug'        => 'dashboard',
        'http_method' => 'GET',
        'http_path'   => '/',
      ],
      [
        'name'        => 'Login',
        'slug'        => 'auth.login',
        'http_method' => '',
        'http_path'   => "/auth/login\r\n/auth/logout",
      ],
      [
        'name'        => 'User setting',
        'slug'        => 'auth.setting',
        'http_method' => 'GET,PUT',
        'http_path'   => '/auth/setting',
      ],
      [
        'name'        => 'Auth management',
        'slug'        => 'auth.management',
        'http_method' => '',
        'http_path'   => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
      ],
      [
        'name'        => 'Portfolio',
        'slug'        => 'portfolio',
        'http_method' => '',
        'http_path'   => "/content/portfolio*",
      ],
    ]);

    Role::first()->permissions()->save(Permission::first());
    Role::find(2)->permissions()->saveMany(
      [
        Permission::find(6),
        Permission::find(3),
        Permission::find(4),
        Permission::find(2),
      ]);

    // add default menus.
    Menu::truncate();
    Menu::insert([
      [
        'parent_id' => 0,
        'order'     => 1,
        'title'     => 'Index',
        'icon'      => 'fa-bar-chart',
        'uri'       => '/',
      ],
      [
        'parent_id' => 0,
        'order'     => 2,
        'title'     => 'Portfolio',
        'icon'      => 'fa-newspaper-o',
        'uri'       => '/content/portfolio',
      ],
      [
        'parent_id' => 0,
        'order'     => 3,
        'title'     => 'Admin',
        'icon'      => 'fa-tasks',
        'uri'       => '',
      ],
      [
        'parent_id' => 3,
        'order'     => 4,
        'title'     => 'Users',
        'icon'      => 'fa-users',
        'uri'       => 'auth/users',
      ],
      [
        'parent_id' => 3,
        'order'     => 5,
        'title'     => 'Roles',
        'icon'      => 'fa-user',
        'uri'       => 'auth/roles',
      ],
      [
        'parent_id' => 3,
        'order'     => 6,
        'title'     => 'Permission',
        'icon'      => 'fa-ban',
        'uri'       => 'auth/permissions',
      ],
      [
        'parent_id' => 3,
        'order'     => 7,
        'title'     => 'Menu',
        'icon'      => 'fa-bars',
        'uri'       => 'auth/menu',
      ],
      [
        'parent_id' => 3,
        'order'     => 8,
        'title'     => 'Operation log',
        'icon'      => 'fa-history',
        'uri'       => 'auth/logs',
      ],
    ]);

    // add role to menu.
    Menu::find(3)->roles()->save(Role::first());
    Menu::find(2)->roles()->saveMany([Role::find(2), Role::find(1)]);
  }
}
