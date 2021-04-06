<?php

namespace Database\Factories;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;



    /*
        >>> use App\Models\{User,Tweet};
        >>> User::factory()->has(Tweet::factory()->count(5))->create();
        => App\Models\User {#4186
            name: "Mr. Derek Willms",
            email: "doris.morar@example.org",
            email_verified_at: "2021-03-19 01:04:38",
            #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            #remember_token: "fQ1DKLtf9h",
            updated_at: "2021-03-19 01:04:38",
            created_at: "2021-03-19 01:04:38",
            id: 4,
        }
    */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(),
            'body' => $this->faker->sentence()
        ];
    }
}
