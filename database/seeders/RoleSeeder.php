<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = Role::create(['name' => 'SuperAdmin']);
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleEditor = Role::create(['name' => 'Editor']);
        $roleAuthor = Role::create(['name' => 'Author']);
        $roleContributor = Role::create(['name' => 'Contributor']);
        $roleDonor = Role::create(['name' => 'Donor']);
        $roleFaciliatator = Role::create(['name' => 'Facilitator']);
        $roleSubscriber = Role::create(['name' => 'Subscriber']);
    }
}
