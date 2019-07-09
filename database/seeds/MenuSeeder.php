<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name' => 'Pessoas',
                'description' => 'Cadastro de pessoas'
            ]
        ];

        foreach($menus as $menu){
            $menu_model = Menu::findOrNew(array('name' => $menu['name']));
            $menu_model->description = $menu['description'];

            $menu_model->save();
        }
    }
}
