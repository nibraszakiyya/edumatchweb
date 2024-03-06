<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'Nama' => 'Karina Dewi',
            'Email' => 'karinadewi@gmail.com',
            'Notelp' => '0812121212',
            'Kelas' => '12',
        ]);
    }
}
