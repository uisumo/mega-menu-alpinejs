<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permissions\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        [
            User::create([
            'name' => 'Greg Herrick',
            'username' => 'Logos777',
            'bio' => 'This is a random bio and it will be longer in the real world.',
            'languages' => 'English',
            'church' => 'First Wesleyan Church',
            'status' => 'Active',
            'email' => 'greg@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            ])->assignRole(['SuperAdmin']),

            $userSuperAdmin = User::create([
            'name' => 'SuperAdmin',
            'username' => 'SuperAdmin777',
            'bio' => 'This is a random bio and it will be longer in the real world.',
            'languages' => 'English',
            'church' => 'First Wesleyan Church',
            'status' => 'Active',
            'email' => 'superadmin@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole(['SuperAdmin']),

            $userAdmin = User::create([
                'name' => 'Admin',
                'username' => 'Admin777',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'admin@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole(['Admin']),

            $userEditor = User::create([
                'name' => 'Editor',
                'username' => 'Editor777',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'editor@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole(['Editor']),

            $userAuthor = User::create([
                'name' => 'Author',
                'username' => 'Author',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'author@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole('Author'),

            $userContributor = User::create([
                'name' => 'Contributor',
                'username' => 'Contributor',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'contributor@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole('Contributor'),

            $userDonor = User::create([
                'name' => 'Donor',
                'username' => 'Donor',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'donor@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole('Donor'),

            $userFacilitator = User::create([
                'name' => 'Facilitator',
                'username' => 'Facilitator',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'facilitator@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole(['Facilitator']),

            $userSubscriber = User::create([
                'name' => 'Subscriber',
                'username' => 'Subscriber',
                'bio' => 'This is a random bio and it will be longer in the real world.',
                'languages' => 'English',
                'church' => 'First Wesleyan Church',
                'status' => 'Active',
                'email' => 'subscriber@test.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole(['Subscriber']),
            
        ];

    }
}