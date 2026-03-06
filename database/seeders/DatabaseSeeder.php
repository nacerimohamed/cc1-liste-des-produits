<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Produit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


public function run()
{
    Categorie::factory(5)->create();
    Produit::factory(20)->create();
}
}