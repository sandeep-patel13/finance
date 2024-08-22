<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Bank;
use App\Models\BankDetail;

class BankDetailSeeder extends Seeder
{
   
    public function run(Faker $faker): void
    {
        $banks = Bank::all();
        $data = [];

        foreach ($banks as $bank) {
            array_push($data , [
                'bankId' => $bank->id,
                'ifscCode' => substr($faker->regexify('[A-Za-z0-9]{20}'), 0, 10)
            ]);
        }
        BankDetail::insert($data);
    }
}
