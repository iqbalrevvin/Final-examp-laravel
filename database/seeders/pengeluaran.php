<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pengeluaran extends Seeder
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
        for($i = 1; $i <= 12; $i++){
            DB::table('pengeluarans')->insert([
                'Jenis_Kebutuhan' => 'Listrik',
                'Nominal'         => rand(1000000,2000000),
                'created_at'=>$date
            ]);
            $date=date('Y-m-d H:i:s',strtotime('+1 MONTHS',strtotime($date)));
        }
    
    }
}
