<?php

namespace Database\Factories;

use App\Models\UserCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 50),
            'company_id' => mt_rand(1, 20),
            'start_work' => $this->faker->dateTimeBetween($startDate = '-7 years', $endDate = 'now'),
            'end_work' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ];
    }
}
