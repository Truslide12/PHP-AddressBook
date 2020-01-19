<?php

use Faker\Provider\lv_LV\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::table('addresses')->insert([
            'id' => bigIncrements(),
            'number' => str_random(4),
            'street' => str_random(10),
            'city' => str_random(10).'@gmail.com',
            'state' => str_random(10),
            'zip' => int_random(5),
            'contact_id' => bigIncrements('id') 
        ]);
    }
}
