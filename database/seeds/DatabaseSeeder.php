<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('levels')->insert([
            ['level' => 'Beg 1','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Beg 2','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Beg 3','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Beg 4','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Beg 5','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Beg 6','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Int 1','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Int 2','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Int 3','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Int 4','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Int 5','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Int 6','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Adv 1','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Adv 2','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Adv 3','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Adv 4','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Adv 5','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('roles')->insert([
            ['role' => 'Student','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['role' => 'Teacher','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['role' => 'Administrator','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('users')->insert([
            ['name' => 'Mohamed Msassi',
             'email' => 'smallcity@gmail.com',
             'level_id' => 10,
             'role_id' => 2,
             'class' => 'B1',
             'phone' => '+21266589754',
             'password' => bcrypt('000000'),
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ],
            ['name' => 'Root',
             'email' => 'root@root.com',
             'level_id' => 12,
             'role_id' => 3,
             'class' => 'B1',
             'phone' => '+21266589754',
             'password' => bcrypt('000000'),
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ]
        ]);

        DB::table('slots')->insert([
            [
             'daterange' => '2017-01-31 16:47:30',
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
            ],
            [
             'daterange' => '2017-01-31 16:47:30',
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
            ]
        ]);

        DB::table('roleplays')->insert([
            ['name' => 'Cinema role play ','level_id'=>2,'body'=>'body seeder one','city' => 'Tangier','center' => 'ALC', 'created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Agent asker','level_id'=>3,'body'=>'body seeder two','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Cinema worker and descussior','level_id'=>12,'body'=>'body seeder three','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Coffe joker and server','level_id'=>17,'body'=>'body seeder four','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('roleplay_user')->insert([
            ['user_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['user_id' => 2, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['user_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['user_id' => 2, 'roleplay_id' => 2,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30']
        ]);
        DB::table('worksheets')->insert([
            ['room' => 'A1' ,'slot_id' => 1, 'level_id' => 1,'teacher' =>'admin','students' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['room' => 'A1' ,'slot_id' => 2, 'level_id' => 8,'teacher' =>'mohamed','students' => 3,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30']
        ]);
    }
}
