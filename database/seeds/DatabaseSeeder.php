<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);.
        DB::table('user_type')->insert(
                array(
                    array(
                        'type_text' => 'Self Service',
                        'type_desc' => 'This user group is for '
                    ),
                    array(
                        'type_text' => 'CallPhone Vendor',
                        'type_desc' => 'This user group is for Callphone Vendors'
                    ),
                    array(
                        'type_text' => 'Distributors',
                        'type_desc' => 'This user group Other Distributors except callphone '
                    ),
                    array(
                        'type_text' => 'Distributors - Vendor',
                        'type_desc' => 'This user group is for Other Distributors Vendor'
                    )
                )
        );
        
        DB::table('statuses')->insert(
                array(
                    array(
                        'sta_name' => 'Successful',
                        'sta_code' => '3000',
                        'sta_desc' => 'Status for successful transaction'
                    ),
                    array(
                        'sta_name' => 'Falied',
                        'sta_code' => '2000',
                        'sta_desc' => 'Status for failed transaction'
                    ),
//                    array(
//                        'type_text' => 'Distributors',
//                        'type_desc' => 'This user group Other Distributors except callphone '
//                    )
                )
        );
        
        DB::table('users')->insert(
                array(
                    array(
                        'first_name' => 'CallPhone',
                        'last_name' => 'CallPhone',
                        'email'=>'call@phone.com',
                        'phone_number'=>'00000',
                        'password'=>  bcrypt('callphone'),
                        'type_id'=>0,
                        'dist_id'=>0,
                        'is_admin'=>0
                    ),
                    array(
                        'first_name' => 'test',
                        'last_name' => 'test',
                        'email'=>'test@phone.com',
                        'phone_number'=>'1111',
                        'password'=>  bcrypt('test'),
                        'type_id'=>1,
                        'dist_id'=>1,
                        'is_admin'=>0
                    ),
                    array(
                        'first_name' => 'vendor',
                        'last_name' => 'vendor',
                        'email'=>'vendor@phone.com',
                        'phone_number'=>'2222',
                        'password'=>  bcrypt('vendor'),
                        'type_id'=>1,
                        'dist_id'=>1,
                        'is_admin'=>0
                    )
                    ,
                    array(
                        'first_name' => 'CallPhone',
                        'last_name' => 'Administrator',
                        'email'=>'admin@phone.com',
                        'phone_number'=>'99999',
                        'password'=>  bcrypt('vendor'),
                        'type_id'=>999,
                        'dist_id'=>999,
                        'is_admin'=>1
                    )
                )
        );
        
        DB::table('distributors')->insert(
                array(
                    array(
                        'user_id' => 1,
                    ),
                    
                )
        );
//        DB::table('adminuser')->insert(
//                array(
//                    array(
//                        'user_name' => 'admin',
//                        'user_pass' => bcrypt('admin')
//                    )
//                )
//        );
        
    }

}
