<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//注意指定类名，加上--class参数，才不会作用到articles表
        for($i = 0;$i < 10 ;$i++)
        {
        	\App\User::create([
        			'name' => 'name'.$i,
        			'password' => 'pwd'.$i,
        			'email' => 'mail'.$i.'@qq.com',
        			'created_at' =>  date('y-m-d h:i:s',time()),
        			'updated_at' =>  date('y-m-d h:i:s',time()),

        		]);
        }
    }
}
