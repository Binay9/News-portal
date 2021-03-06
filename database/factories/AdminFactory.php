<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => Hash::make('pass12'),
            'address' => $this->faker->address,
            'phone' => '1212121',
            'type' => 'admin',
        ];
      
    }

    public function isAdmin()
    {
        return $this->state([
         'type' => 'admin'
        ]);
    }
}
