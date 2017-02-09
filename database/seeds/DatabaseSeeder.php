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
            ['level' => 'Adv 5','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Speaker','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['level' => 'Supervisor','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('roles')->insert([
            ['role' => 'Student','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['role' => 'Teacher','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['role' => 'Administrator','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('users')->insert([
            ['name' => 'Mohamed Msassi',
             'email' => 'smallcity@gmail.com',
             'level_id' => 19,
             'role_id' => 2,
             'class' => 'B1',
             'phone' => '+21266589754',
             'password' => bcrypt('000000'),
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ],
            ['name' => 'Abdennour Merghad',
             'email' => 'root@root.com',
             'level_id' => 19,
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
             'from' => '2017-01-31 16:47:30',
             'to' => '2017-01-31 16:47:59',
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
            ],
            [
             'from' => '2017-01-21 16:47:30',
             'to' => '2017-01-31 16:47:59',
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
            ]
        ]);

        DB::table('roleplays')->insert([
            ['name' => 'Cinema role play ','city' => 'Tangier','center' => 'ALC', 'created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Agent asker','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Cinema worker and descussior','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Coffe joker and server','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('roleplay_user')->insert([
            ['user_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['user_id' => 2, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['user_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['user_id' => 2, 'roleplay_id' => 2,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30']
        ]);
        DB::table('roleplay_slot')->insert([
            ['slot_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['slot_id' => 2, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['slot_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30']
        ]);

        DB::table('comments')->insert([
            ['username' => 'Imad Rami','body' => 'What happens when you stick over one billion people on a social network where everything is mostly public? Some pretty hilarious and embarrassing stuff', 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['username' => 'Rayan Ibrahim','body' => 'We sorted through the ruff to find the diamonds and so we present for your viewing pleasure, the forty-five most epic Facebook comments ever', 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['username' => 'Imad Rami','body' => 'What happens when you stick over one billion people on a social network where everything is mostly public? Some pretty hilarious and embarrassing stuff', 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['username' => 'Rayan Ibrahim','body' => 'We sorted through the ruff to find the diamonds and so we present for your viewing pleasure, the forty-five most epic Facebook comments ever', 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['username' => 'Imad Rami','body' => 'What happens when you stick over one billion people on a social network where everything is mostly public? Some pretty hilarious and embarrassing stuff', 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['username' => 'Rayan Ibrahim','body' => 'We sorted through the ruff to find the diamonds and so we present for your viewing pleasure, the forty-five most epic Facebook comments ever', 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30']
        ]);
    }
}
