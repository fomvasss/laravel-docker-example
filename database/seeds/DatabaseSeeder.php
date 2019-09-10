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
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@app.com',
                'password' => '$2y$10$JatZ2lcUy0OWknajO0wHWOJH6AhqkbYYU4sauS40I.m.WGNC6Rrpy',
            ],
            [
                'name' => 'Eva',
                'email' => 'eva@app.com',
                'password' => '$2y$10$JatZ2lcUy0OWknajO0wHWOJH6AhqkbYYU4sauS40I.m.WGNC6Rrpy',
            ],
            [
                'name' => 'Adam',
                'email' => 'adam@app.com',
                'password' => '$2y$10$JatZ2lcUy0OWknajO0wHWOJH6AhqkbYYU4sauS40I.m.WGNC6Rrpy',
            ],
        ];


        foreach ($users as $user) {
            \App\User::create($user);
        }

        factory(\App\User::class, 15)->create();
    }
}
