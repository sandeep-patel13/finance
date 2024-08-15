<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\BankAccount;
use App\Models\User;
use App\Models\Bank;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = [];
        $userIds = User::pluck('id')->toArray();
        $bankIds = Bank::pluck('id')->toArray();
        for($i = 0 ; $i < 10 ; $i++) {
            if(count($userIds) == 0 || count($bankIds) == 0)
                break;
            $randomUserId = array_rand($userIds);
            $randomBankId = array_rand($bankIds);
            unset($userIds[array_search($randomUserId , $userIds)] , $bankIds[array_search($randomBankId , $bankIds)]);
            array_push($data , [
                'accountNumber' => $faker->phoneNumber,
                'userId' => $randomUserId,
                'bankId' => $randomBankId,
                'created_at' => date('Y-m-d'),
            ]);
        }

        BankAccount::insert($data);
    }
}
