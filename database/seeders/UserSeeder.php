<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin
        $superAdmin = User::firstOrCreate(
            [
                'email' => 'superadmin@vendorhub.com'
            ],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        $superAdmin->assignRole('super-admin');

        // Admin
        $admin = User::firstOrCreate(
            [
                'email' => 'admin@vendorhub.com'
            ],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        $admin->assignRole('admin');

        // Vendor
        $vendor = User::firstOrCreate(
            [
                'email' => 'vendor@vendorhub.com'
            ],
            [
                'name' => 'Vendor',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        $vendor->assignRole('vendor');

        // Customer
        $customer = User::firstOrCreate(
            [
                'email' => 'customer@vendorhub.com'
            ],
            [
                'name' => 'Customer',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        $customer->assignRole('customer');
    }
}