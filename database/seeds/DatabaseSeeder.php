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
        DB::table('users')->insert([
            [ 'name' => 'Root','email' => 'root@root.com','password' => bcrypt('000000'), 'created_at' => '2017-01-31 16:47:30'],
            [ 'name' => 'Admin','email' => 'admin@admin.com','password' => bcrypt('000000'), 'created_at' => '2017-01-31 16:47:30'],          
        ]);
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
        DB::table('showers')->insert([
            ['name' => 'Imad Rami',
             'email' => 'smallcity@gmail.com',
             'phone' => '+21266589754',
             'class' => 'Beginning One',
             'teacher' => 'Mohamed Amin',
             'image' => 'default.png',
             'level_id' => 4,
             'stars' => 1,
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ],
            ['name' => 'Rayan Ibrahim',
             'email' => 'rayan@gmail.com',
             'phone' => '+21266586754',
             'class' => 'Intermediate Three',
             'teacher' => 'Mohamed Amin',
             'image' => 'default.png',
             'level_id' => 9,
             'stars' => 2,
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ],
            ['name' => 'Ranim Issa',
             'email' => 'Ranim@gmail.com',
             'phone' => '+212142458254',
             'class' => 'Advanced Five',
             'teacher' => 'Mohamed Reda',
             'image' => 'default.png',
             'level_id' => 17,
             'stars' => 5,
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ],
            ['name' => 'Ranim Issa',
             'email' => 'Ranim@gmail.com',
             'phone' => '+212142458254',
             'class' => 'Supervisor',
             'teacher' => 'Mohamed Reda',
             'image' => 'default.png',
             'level_id' => 19,
             'stars' => 5,
             'created_at' => '2017-01-31 16:47:30',
             'updated_at' => '2017-01-10 16:47:30'
           ]
        ]);

        DB::table('roleplays')->insert([
            ['name' => 'Cinema role play ','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Agent asker','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Cinema worker and descussior','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30'],
            ['name' => 'Coffe joker and server','city' => 'Tangier','center' => 'ALC','created_at' => '2017-01-31 16:47:30', 'updated_at' => '2017-01-10 16:47:30']
        ]);
        DB::table('roleplay_shower')->insert([
            ['shower_id' => 1, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 2, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 4, 'roleplay_id' => 1,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 2, 'roleplay_id' => 2,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 3, 'roleplay_id' => 2,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 4, 'roleplay_id' => 2,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 1, 'roleplay_id' => 3,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 2, 'roleplay_id' => 3,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 4, 'roleplay_id' => 3,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 2, 'roleplay_id' => 4,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 3, 'roleplay_id' => 4,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30'],
            ['shower_id' => 4, 'roleplay_id' => 4,'created_at' => '2017-01-31 16:47:30','updated_at' => '2017-01-10 16:47:30']
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
