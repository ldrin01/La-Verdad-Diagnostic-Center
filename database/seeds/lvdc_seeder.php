<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class lvdc_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->patients();
        $this->departments();
        $this->staffs();
        $this->requests();
        $this->department_staffs();
    }

    public function patients(){
    	echo "patients \n";

    	$first_name = array("John", "Lenny", "Norie", "Carlo", "Eldrin", "Charlie", "Aldrin", "Ramil", "Louie", "lovell", "Roberto", "Edgardo", "Remedios", "Rowena", "Nenita", "Silvia", "Pilar", "Olivia", "Barbara", "Eduardo", "Margarita", "Danillo", "Ariel", "Apolinario", "Restituto", "Fernando", "Ferdinand", "Juan", "Pedro", "Louis", "Romualdo", "Romel", "Elmer", "Arvin", "Albert", "Kevin", "Joward", "Rey", "Miguel", "Kenneth", "Coco", "JR", "Steven", "Steve", "Stephen", "Rondolf", "Noel", "Rodolfo","Ragnel", "Ronmar");
    	$middle_name = array("Bernardo", "Abella",  "Quiza", "Ford", "Ramirez", "Dailisan", "Failon", "Reyes", "Manalo", "Alaban", "Alcantara", "Zamora", "Burgos", "Blumentritt", "Bonifacio", "Taviel", "Taimis", "Mercado", "Alonzo", "Djemnah", "Salvador", "Pineda", "Razon", "Claveria", "Cabigting", "Perez", "Illustre", "Cruz", "San Jose", "Custodio", "Mangohom", "Buenaventura", "Dimagiba", "Tibayan", "Retutar", "Bracken", "Usui", "Beckette", "Romualdez", "Katigbak", "Rivera", "Lobo", "Sison", "Devera", "Quizon", "Aquino", "Trump", "Duterte", "Montero", "Tuazon" );
    	$gender = array("male", "female");
    	$status = array("Single", "Married", "Widowed");

    	$i = 0;
    	while ($i < 50) {
    		DB::table('patients')->insert([
     			'last_name' => $middle_name[$i],
	     		'first_name' => $first_name[rand(0, 49)],
		     	'middle_name' => $middle_name[rand(0, 49)],
		     	'address' => rand(101, 999)." ".Str_random(rand(4, 9))." st., Brgy. ".Str_random(rand(4, 9)).", ".Str_random(rand(4, 9))." City",
		     	'age' => rand(4, 35),
		     	'gender' => $gender[rand(0, 1)],
		     	'birthdate' => Carbon::now(),
		     	'contact_number' => "09".rand(100000001,999999999),
		     	'religion' => Str_random(10),
		     	'civil_status' => $status[rand(0,2)],
		     	'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  
    }

    public function departments(){
    	echo "\n departments \n";

    	$department_names = array("Laboratory", "Radiology", "Dental", "ECG", "Consultation");

    	$i = 0;
    	while ($i < 5) {
    		DB::table('departments')->insert([
     			'name' => $department_names[$i],
		     	'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  
    }

    public function staffs(){
    	echo "\n staffs \n";

    	$department_names = array("Laboratory", "Radiology", "Dental", "ECG", "Consultation");
    	$first_name = array("John", "Lenny", "Norie", "Carlo", "Eldrin", "Charlie", "Aldrin", "Ramil", "Louie", "lovell", "Roberto", "Edgardo", "Remedios", "Rowena", "Nenita", "Silvia", "Pilar", "Olivia", "Barbara", "Eduardo", "Margarita", "Danillo", "Ariel", "Apolinario", "Restituto", "Fernando", "Ferdinand", "Juan", "Pedro", "Louis", "Romualdo", "Romel", "Elmer", "Arvin", "Albert", "Kevin", "Joward", "Rey", "Miguel", "Kenneth", "Coco", "JR", "Steven", "Steve", "Stephen", "Rondolf", "Noel", "Rodolfo","Ragnel", "Ronmar");
    	$middle_name = array("Bernardo", "Abella",  "Quiza", "Ford", "Ramirez", "Dailisan", "Failon", "Reyes", "Manalo", "Alaban", "Alcantara", "Zamora", "Burgos", "Blumentritt", "Bonifacio", "Taviel", "Taimis", "Mercado", "Alonzo", "Djemnah", "Salvador", "Pineda", "Razon", "Claveria", "Cabigting", "Perez", "Illustre", "Cruz", "San Jose", "Custodio", "Mangohom", "Buenaventura", "Dimagiba", "Tibayan", "Retutar", "Bracken", "Usui", "Beckette", "Romualdez", "Katigbak", "Rivera", "Lobo", "Sison", "Devera", "Quizon", "Aquino", "Trump", "Duterte", "Montero", "Tuazon" );
    	$gender = array("male", "female");

    	$i = 0;
    	$a = 0;
    	while ($i < 30) {
    		if ($a == 3) {
	    		$a = 0;
	    		DB::table('staffs')->insert([
	    			'prefix' => "Doctor",
	     			'last_name' => $middle_name[rand(0, 49)],
		     		'first_name' => $first_name[rand(0, 49)],
			     	'middle_name' => $middle_name[rand(0, 49)],
			     	'suffix' => "MD.",
			     	'gender' => $gender[rand(0, 1)],
			     	'field' => Str_random(rand(7, 14)),
			     	'created_at' => Carbon::now(),
			     	'updated_at' => Carbon::now()
		     	]);
		     }else{
		     	DB::table('staffs')->insert([
		    		'prefix' => "",
	     			'last_name' => $middle_name[rand(0, 49)],
		     		'first_name' => $first_name[rand(0, 49)],
			     	'middle_name' => $middle_name[rand(0, 49)],
				    'suffix' => "",
				    'gender' => $gender[rand(0, 1)],
				    'field' => Str_random(rand(7, 14)),
			     	'created_at' => Carbon::now(),
			     	'updated_at' => Carbon::now()
		     	]);
		     }

	     	echo $i." ";
    		$i++;
    		$a++;
    	}  
    }

    public function requests(){
    	echo "\n requests \n";

    	$Laboratory = array("CBC", "Platelet Count", "RGB & HCT", "Blood Typing", "Bleeding time", "Cotting time", "E.S.R.", "Degue Duo", "Peripheral Smear", "Pregnancy test", "Routine Fecalysis", "Routine Urinalysis", "Sodium electrolyte", "Potassium electrolyte", "Chloride electrolyte", "Calcium electrolyte", "Total electrolyte", "Ionized electrolyte", "1 hr. P.P. Glucose", "2 hr. P.P. Glucose", "FBS", "RBS", "HbA1c", "BUA", "BUN", "Creatinine", "Total Cholesterol", "Triglycrides", "HDL", "LDL", "SGOT (ALT)", "SGPT (AST)", "Total PSA", "HBsAg", "Anti-HBs", "HBeAg", "Anti-HBE", "Anti-HBc Igm", "Anti-HBc IgG", "HAV Igm", "HAV Igg", "HCV IgG", "Typhidot IgG/IgM", "FT3", "FT4", "TSH");
    	$Radiology = array("Chest for heart and lungs", "Extremeties", "Skull", "Vertebral column", "ocalization of foreign body", "Pelvis", "Shouder Girdle", "Thoracis Girdle", "Abdomen", "Paranassal Sinuses", "Scoliotic series", "Panoramic X-ray");
    	$Dental = array("Pasta", "Extraction", "Cleaning");
    	$ECG = array("2D echo");
    	$Consultation = array("Consultation");

    	$i = 0;
    	while ($i < 46) {
    		DB::table('requests')->insert([
     			'name' => $Laboratory[$i],
     			'department_id' => "1",
     			'description' => Str_random(rand(4,10))." ".Str_random(rand(4,10))." ".Str_random(rand(4,10)),
     			'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  

    	$i = 0;
    	while ($i < 12) {
    		DB::table('requests')->insert([
     			'name' => $Radiology[$i],
     			'department_id' => "2",
     			'description' => Str_random(rand(4,10))." ".Str_random(rand(4,10))." ".Str_random(rand(4,10)),
     			'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  

    	$i = 0;
    	while ($i < 3) {
    		DB::table('requests')->insert([
     			'name' => $Dental[$i],
     			'department_id' => "3",
     			'description' => Str_random(rand(4,10))." ".Str_random(rand(4,10))." ".Str_random(rand(4,10)),
     			'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  

    	$i = 0;
    	while ($i < 1) {
    		DB::table('requests')->insert([
     			'name' => $ECG[$i],
     			'department_id' => "4",
     			'description' => Str_random(rand(4,10))." ".Str_random(rand(4,10))." ".Str_random(rand(4,10)),
     			'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  

    	$i = 0;
    	while ($i < 1) {
    		DB::table('requests')->insert([
     			'name' => $Consultation[$i],
     			'department_id' => "5",
     			'description' => Str_random(rand(4,10))." ".Str_random(rand(4,10))." ".Str_random(rand(4,10)),
     			'created_at' => Carbon::now(),
		     	'updated_at' => Carbon::now()
	     	]);
	     	echo $i." ";
    		$i++;
    	}  



    }

    public function department_staffs(){
    	echo "\n department staffs \n";

    	$department_names = array("Laboratory", "Radiology", "Dental", "ECG", "Consultation");

    	$i = 0;
    	$staff_id = 1;
    	while ($i < 5) {
    		$a = 0;
    		while ($a < 6) {
	    		DB::table('department_staffs')->insert([
	     			'department_id' => $i+1,
	     			'staff_id' => $staff_id,
			     	'created_at' => Carbon::now(),
			     	'updated_at' => Carbon::now()
		     	]);
				echo $a." ";
		     	$a++;
		     	$staff_id++;
		     }
    		$i++;
    	}  
    }




}
