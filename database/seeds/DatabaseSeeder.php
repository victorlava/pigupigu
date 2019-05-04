<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LanguageSeeder::class);
        factory(App\User::class)->create([
          'email' => 'admin',
          'password' => bcrypt('admin'), // password
        ]);

        factory(App\Language::class)->create([
            'name' => 'Lithuanian',
            'code' => 'lt'
        ]);

        factory(App\Language::class)->create([
            'name' => 'English',
            'code' => 'en'
        ]);
    }
}
