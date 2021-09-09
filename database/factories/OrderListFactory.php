<?php

namespace Database\Factories;

use App\Models\OrderList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nama_Pelanggan' =>$this->faker->name(),
            'Nomor_Pesanan' => rand(001,999),
            'Total_Harga' =>rand(100000,1000000)
        ];
    }
}
