<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderList;
class OrderlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderlist = [
            [
                'Nama_Pelanggan' => 'Parid',
                'Nomor_Pesanan' => 'A001',
                'Total_Harga' => '500000'

            ],
        ];
        foreach($orderlist as $key => $value){
            OrderList::create($value);
        }
    }
}
