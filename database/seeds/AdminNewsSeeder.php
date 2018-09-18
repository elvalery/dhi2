<?php


use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;

class AdminNewsSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    Permission::insert([
      [
        'name'        => 'News',
        'slug'        => 'news',
        'http_method' => '',
        'http_path'   => "/content/news*",
      ]
    ]);

    Role::find(2)->permissions()->saveMany(
      [
        Permission::where(['slug' => 'news'])->first(),
      ]);

    Menu::insert([
      [
        'parent_id' => 0,
        'order'     => 12,
        'title'     => 'News',
        'icon'      => 'fa-newspaper-o',
        'uri'       => '/content/news',
      ],

    ]);

    // add role to menu.
    Menu::find(12)->roles()->saveMany([Role::find(2), Role::find(1)]);
  }
}
