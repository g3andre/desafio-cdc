<?php

namespace Database\Seeders;

use Database\Factories\AutorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AutorFactory::new()->count(10)->create();
    }
}
