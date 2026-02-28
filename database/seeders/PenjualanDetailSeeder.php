<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            for ($i = 1; $i <= 3; $i++) {
                $barang_id = rand(1, 15);

                $harga = DB::table('m_barang')
                    ->where('barang_id', $barang_id)
                    ->value('harga_jual');

                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $penjualan,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}