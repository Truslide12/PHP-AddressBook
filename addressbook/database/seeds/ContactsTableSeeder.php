<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();
		$faker = Faker\Factory::create();
			
		for ($i = 0; $i < 100; $i++)
		{
		  $contacts = Contact::create(array(
            'id' => bigIncrements(),
            'firstName' => $faker->str_random(10),
            'lastName' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => str_random(10),
            'birthday' => str_random(10),
        ));
    }
    }
}
