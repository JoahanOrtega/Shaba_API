<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Obtener un producto aleatorio
        $product = Product::inRandomOrder()->first();

        // Obtener un usuario aleatorio excluyendo al admin
        $user = User::whereNotIn('id', [1])->inRandomOrder()->first();

        // Calcular el precio total basado en el precio del producto
        $totalPrice = $product->price;

        return [
            'id_product' => $product->id,
            'id_user' => $user->id,
            'sale_date' => $this->faker->date(),
            'total_price' => $totalPrice,
        ];
        
    }
}
