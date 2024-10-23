<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     User::updateOrCreate(['email'=>'admin@admin.com'],['name'=>'jan'
     ,'password'=>bcrypt('12345678'),
    ]);
    }
}
