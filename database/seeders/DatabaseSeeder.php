<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\States;
use App\Models\Users;
use App\Models\UsersRoles;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        States::factory()->count(6)->create();
        Users::factory()->count(500)->create();
        Roles::factory()->count(7)->create();
        UsersRoles::factory()->count(500)->create();
    }
}
