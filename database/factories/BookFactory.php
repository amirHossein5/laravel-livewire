<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text(30);
        return [
            'title'=> $title,
            'description'=>$this->faker->text(5000),
            'user_id'=>5,
            'slug'=>Str::slug($title)
        ];
    }
}
