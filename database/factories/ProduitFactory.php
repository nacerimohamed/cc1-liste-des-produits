<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition()
{
    return [
        'nom'=>$this->faker->word(),
        'description'=>$this->faker->sentence(),
        'prix'=>$this->faker->randomFloat(2,10,500),
        'quantite'=>$this->faker->numberBetween(1,50),
        'urlImage'=>$this->faker->imageUrl(),
        'id_cat'=>Categorie::factory()
    ];
}
}
