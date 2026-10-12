<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::create([
            'name' => 'azril',
            'email' => 'azril@example.com',
            'phone' => '088708812648',
            'address' => 'aceh, banda aceh'
        ]);
    }
}