<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD

class NotifyThemeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = \Modules\Notify\Models\NotifyTheme::class;
=======
use Illuminate\Support\Str;

use Modules\Notify\Models\NotifyTheme;

class NotifyThemeFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Modules\Notify\Models\NotifyTheme::class;
>>>>>>> 103a1c2 (.)

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(5, false),
=======
    public function definition() {
       

        return [
            'id' => $this->faker->randomNumber,
>>>>>>> 103a1c2 (.)
            'lang' => $this->faker->word,
            'type' => $this->faker->word,
            'subject' => $this->faker->word,
            'body' => $this->faker->text,
            'body_html' => $this->faker->text,
<<<<<<< HEAD
            'from' => $this->faker->word,
=======
            'from' => $this->faker->word
>>>>>>> 103a1c2 (.)
        ];
    }
}
