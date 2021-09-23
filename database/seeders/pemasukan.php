<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\DatabaseSeeder;
class Pemasukan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tanggal = "2021-01-01 15:30:10";
        $date = date("Y-m-d H:i:s",strtotime($tanggal));
        for($i = 1; $i <= 250; $i++){
            DB::table('pemasukans')->insert([
                'pemasukan' => rand(11000000,13000000),
                'created_at'=>$date
            ]);
            $date=date('Y-m-d H:i:s',strtotime('+1 DAYS',strtotime($date)));
        }
    }
}
