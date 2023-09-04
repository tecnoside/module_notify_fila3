<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

class NotifyThemeFactory extends Factory
{
=======

<<<<<<< HEAD
class NotifyThemeFactory extends Factory {
>>>>>>> a758bd5 (.)
=======
class NotifyThemeFactory extends Factory
{
>>>>>>> 34ed535 (.)
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = \Modules\Notify\Models\NotifyTheme::class;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;

use Modules\Notify\Models\NotifyTheme;
=======
>>>>>>> 780e17a (up)
=======
>>>>>>> fe06862 (.)

class NotifyThemeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected $model = Modules\Notify\Models\NotifyTheme::class;
>>>>>>> 103a1c2 (.)
=======
    protected $model = \Modules\Notify\Models\NotifyTheme::class;
>>>>>>> 7d0cb15 (.)
=======
    protected $model = \Modules\Notify\Models\NotifyTheme::class;
>>>>>>> fe06862 (.)
=======
>>>>>>> a758bd5 (.)

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(5, false),
=======
    public function definition() {
        return [
<<<<<<< HEAD
            'id' => $this->faker->randomNumber,
>>>>>>> 103a1c2 (.)
=======
            'id' => $this->faker->randomNumber(5, false),
>>>>>>> 7d0cb15 (.)
=======
    public function definition() {
=======
    public function definition()
    {
>>>>>>> 42f9249 (.)
        return [
            'id' => $this->faker->randomNumber(5, false),
>>>>>>> fe06862 (.)
=======
    public function definition() {
=======
    public function definition()
    {
>>>>>>> 34ed535 (.)
        return [
            'id' => $this->faker->randomNumber(5, false),
>>>>>>> a758bd5 (.)
            'lang' => $this->faker->word,
            'type' => $this->faker->word,
            'subject' => $this->faker->word,
            'body' => $this->faker->text,
            'body_html' => $this->faker->text,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'from' => $this->faker->word,
=======
            'from' => $this->faker->word
>>>>>>> 103a1c2 (.)
=======
            'from' => $this->faker->word,
>>>>>>> 780e17a (up)
=======
            'from' => $this->faker->word,
>>>>>>> fe06862 (.)
=======
            'from' => $this->faker->word,
>>>>>>> a758bd5 (.)
        ];
    }
}
