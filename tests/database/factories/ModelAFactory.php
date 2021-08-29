<?php

declare(strict_types=1);

namespace Deligoez\LaravelModelHashIDs\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Deligoez\LaravelModelHashIDs\Tests\Models\ModelA;

class ModelAFactory extends Factory
{
    protected string $model = ModelA::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
