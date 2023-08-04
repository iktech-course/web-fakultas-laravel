<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Irfan Kurniawan',
            'username' => 'Irfan858',
            'password' => bcrypt('IrfanKWN858'),
            'level' => 1
        ]);
    }
}
