<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Categoria::class;

    
    public function definition(): array
    {
        return [];
    }

    public function family()
    {
        return $this->state([
            'name' => 'Family',
            'color' => '#1591EA'
        ]);
    }

    public function friends()
    {
        return $this->state([
            'name' => 'Friends',
            'color' => '#50C878'
        ]);
    }

    public function work()
    {
        return $this->state([
            'name' => 'Work',
            'color' => '#FF2C2C'
        ]);
    }

    public function other()
    {
        return $this->state([
            'name' => 'other',
            'color' => '#DB9D00'
        ]);
    }
}

/*
    #1591EA
    #FF2C2C
    #50C878
    #DB9D00
    #7F00FF
    #FC608F
    #00B9B3
    #8AC850
    #FF7518
    #0e4aa4
*/