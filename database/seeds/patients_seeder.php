<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class patients_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$i = 1;
    	while ($i <= 10) {
    		DB::table('patients')->insert([
     			'last_name' => Str_random(10),
	     		'first_name' => Str_random(10),
		     	'middle_name' => Str_random(10),
		     	'address' => Str_random(30),
		     	'age' => rand(4, 35),
		     	'gender' => "male",
		     	'birthdate' => Carbon::now(),
		     	'contact_number' => rand(100,1000),
		     	'religion' => Str_random(10),
		     	'civil_status' => Str_random(10),
		     	'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  
    }
}
