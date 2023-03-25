<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Update;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create();

        Update::factory(7)->create([
            'user_id' => $user->id
        ]);
    }
}
