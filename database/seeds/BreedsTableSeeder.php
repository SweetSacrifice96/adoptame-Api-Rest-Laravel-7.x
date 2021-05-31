<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->delete();
        $json = File::get(__DIR__ . '/json/gatos.json');
        $data = json_decode($json);

        foreach ($data as $item){
            \App\Breed::create(array(
                'name' => $item->name,
                'specie' => $item->specie,
           ));
    }
    }
}
