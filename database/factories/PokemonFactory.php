<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        $createAt = $this->faker->dateTimeInInterval(
            $startDate = '-6 months',
            $interval = '+ 180 days',
        );
        return [
            'nom' => $this->faker->randomElement($array = array('coucou', 'ronron', 'pika')),
            'extension' => $this->faker->randomElement($array = array('Urgent', 'A Faire', 'Optionnel')),
            'vie' => $this->faker->randomElement($array = array(0,1,2,3,4,5,6,7,8,9,10)),
            'type' => $this->faker->randomElement($array = array('feu','eau')),
            'faiblesse' => $this->faker->randomElement($array = array('feu','eau')),
            'degat' => $this->faker->randomElement($array = array(0,1,2,3,4,5,6,7,8,9,10)),
            'created_at' => $createAt,
            'updated_at' => $this->faker->dateTimeInInterval(
                $startDate,
                $interval = $createAt->diff(new DateTime('now'))->format("%R%a days"),
            ),
        ];

    }
}
