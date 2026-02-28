<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('m_supplier')->insert([
    ['supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Sumber Jaya', 'supplier_alamat' => 'Malang'],
    ['supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Maju Mundur', 'supplier_alamat' => 'Surabaya'],
    ['supplier_kode' => 'SUP03', 'supplier_nama' => 'PT Sejahtera', 'supplier_alamat' => 'Jakarta'],
    ]);
    }
}
