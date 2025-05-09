<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Donasi;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donasi>
 */
class DonasiFactory extends Factory
{
    protected $model = Donasi::class;
    
    public function definition(): array
    {
        return [
            'nama_donatur' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'nominal' => $this->faker->numberBetween(10000, 500000),
            'metode_pembayaran' => $this->faker->randomElement(['Transfer', 'Cash', 'E-wallet']),
            'tanggal_donasi' => $this->faker->date(),
            'status' => $this->faker->randomElement(['menunggu konfirmasi', 'dikonfirmasi', 'batal']),
        ];
    }
}
