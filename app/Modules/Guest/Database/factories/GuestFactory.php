<?php

namespace Database\Factories\Modules\Guest\Model;

use App\Modules\Guest\Model\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class GuestFactory extends Factory
{
    /**
     * @var class-string<Model>|string|null
     * @phpstan-ignore-next-line
     */
    protected $model = Guest::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'country' => $this->faker->country,
        ];
    }
}
