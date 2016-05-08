<?php

use Illuminate\Database\Seeder;

class CrudTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Crud::class, 50)->create();
    }
}
