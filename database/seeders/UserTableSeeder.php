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
            'email' => 'irfankurniawan858@gmail.com',
            'password' => bcrypt('IrfanKWN858'),
            'level' => 2
        ]);

        User::create([
            'nama' => 'Ichsan Khaliq Adyanda',
            'email' => 'ichsankhaliq4292@gmail.com',
            'password' => bcrypt('Ichsan0109'),
            'level' => 1
        ]);
    }
}
