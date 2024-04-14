<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Branch;
use App\Models\Department;
use Illuminate\Support\Collection;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'surname' => 'Cash',
            'othernames' => 'Rain',
            'email' => 'info@marketwellsolutions.com',
            'phoneno' => '08179333021',
            'password' => Hash::make('Marketwell@2024'),
            'user_type' => 'Super Admin',
            'status' => "Active",
            'resident_address' => "Kaduna"
        ]);
    }
}
