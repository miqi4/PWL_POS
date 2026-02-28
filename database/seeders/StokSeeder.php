<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'stok_jumlah' => rand(10, 100),
                'stok_tanggal' => now(),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}