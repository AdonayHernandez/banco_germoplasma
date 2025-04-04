<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Aquí se llama al SeedSeeder
        $this->call([
            SeedSeeder::class,
            // puedes agregar otros seeders si los tienes
        ]);
    }
}