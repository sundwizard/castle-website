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
            'surname' => 'Castle',
            'othernames' => 'Education Consult',
            'email' => 'info@castleeduconsult.com.ng',
            'phoneno' => '08179333021',
            'password' => Hash::make('Castle@2024'),
            'user_type' => 'Super Admin',
            'status' => "Active",
            'resident_address' => "Kaduna"
        ]);

        User::create([
            'surname' => 'Ugbon',
            'othernames' => 'Ember',
            'email' => 'emberugbon@gmail.com',
            'phoneno' => '08031841291',
            'password' => Hash::make('Luvday@1994'),
            'user_type' => 'Website Admin',
            'status' => "Active",
            'resident_address' => "Kaduna"
        ]);
    }
}
