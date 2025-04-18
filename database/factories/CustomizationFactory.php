<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customization>
 */
class CustomizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_item_id' => \App\Models\OrderItem::factory(),
            'option_name' => 'Ukuran',
            'option_value' => fake()->randomElement(['Kecil', 'Sedang', 'Besar']),
        ];
    }
}
