<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //引用faker
    	$faker = Faker::create();

    	$username = ['11-john','11-Kane','11-andy','22-bob000','22-jaychou111','22-yoo','22-a12345','33-louderhua01','33-leelee','44-old_man','55-omg_2100','55-yas_321','66-honny_bee','77-goolu','77-flordor','88-Gandofu','88-alagun','lee_big_fly','money_wang','test_user'];
    	$name = ['陳約翰','王凱因','林安迪','包柏','周杰倫','馬友友','廖東山','劉德華','李詩詩','老夫子','歐麥尬得','亞里斯多德','蜂蜜蜜蜂','咕魯','佛羅多','甘道夫','亞拉岡','李大非','王添財','測試帳號'];

    	foreach(range(1, 20) as $index) {
	        $memberData = [
	        	'username' => $username[$index-1],
		    	'password' => '123456',
		    	'name' => $name[$index-1],
	        	'email' => $faker->email,
		    	'phone' => $faker->phoneNumber,
		    	'status' => '1'
	        ];
	        App\User::create($memberData);
	    }

	    $users = App\User::all();
	    foreach ($users as $one) {
	    	foreach(range(1,8) as $index){
	    		$clientsData = [
		    		'user_id' => $one->id,
		    		'first_name' => $faker->firstNameMale,
		    		'last_name' => $faker->lastName,
		    		'phone' => $faker->phoneNumber,
		    		'email' => $faker->email,
		    		'address' => $faker->address,
		    		'sex' => $faker->boolean,
		    		'vip_code' => $faker->bankRoutingNumber,
		    	];
		    	App\Client::create($clientsData);
	    	}
	    	$categories = [
	    		'ASUS',
	    		'Acer',
	    		'Apple',
	    		'HP',
	    		'Lenove',
	    		'Giga',
	    		'Toshiba',
	    		'HTC',
	    		'Samsung',
	    		'Sony',
	    		'LG',
	    		'Hawei',
	    	];

	    	foreach($categories as $category => $value){
	    		$categoryData = [
	    			'user_id' => $one->id,
	    			'name' => $value
	    		];
	    		App\Category::create($categoryData);
	    	}
	    }
    }
}
