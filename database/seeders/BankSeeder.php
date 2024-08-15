<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        array_push($data , ['name' => 'Punjab National Bank' , 'created_at' => date('Y-m-d')]);
        array_push($data , ['name' => 'HDFC Bank', 'created_at' => date('Y-m-d')]);
        array_push($data , ['name' => 'State Bank Of India', 'created_at' => date('Y-m-d')]);
        array_push($data , ['name' => 'Kotak Mahindra Bank', 'created_at' => date('Y-m-d')]);
        Bank::insert($data);
    }
}
