<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    protected $model = Discount::class;

    protected $discountsAmount = [
        '10',
        '20',
        '30',
        '40',
        '50',
        '60',
        '70',
        '80',
        '90',
        '100',
    ];

    protected $discountType = ['percentage', 'fixed'];

    protected $conditionType = ['<', '<=', '=', '=>', '>'];

    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'discount' => $this->discountsAmount[array_rand($this->discountsAmount)],
            'discount_type' => $this->discountType[array_rand($this->discountType)],
            'condition_type' => $this->conditionType[array_rand($this->conditionType)],
            'condition_value' => $this->faker->numberBetween(1, 100),
        ];
    }
}
