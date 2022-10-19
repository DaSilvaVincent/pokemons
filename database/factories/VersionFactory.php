<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VersionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $createAt = $this->faker->dateTimeInInterval(
            $startDate = '-6 months',
            $interval = '+ 180 days',
        );
        return [
            'date_sortie' => Carbon::today()->subDays(rand(0,9400))->addSeconds(rand(0,86400)),
            'numero' => rand(1,4),
            'created_at' => $createAt,
            'updated_at' => $this->faker->dateTimeInInterval(
                $startDate,
                $interval = $createAt->diff(new DateTime('now'))->format("%R%a days"),
            ),
        ];
    }
}
