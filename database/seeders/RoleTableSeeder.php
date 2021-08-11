<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createTasks = new Permission();
        $createTasks->slug = 'view-tasks';
        $createTasks->name = 'View Tasks';
        $createTasks->save();

        $editUsers = new Permission();
        $editUsers->slug = 'edit-users';
        $editUsers->name = 'Edit Users';
        $editUsers->save();

        $manager_role = new Role();
        $manager_role->slug = 'manager';
        $manager_role->name = 'Manager';
        $manager_role->save();
        $manager_role->permissions()->attach($editUsers);
        
        $customer_role = new Role();
        $customer_role->slug = 'customer';
        $customer_role->name = 'Foris Labs Customer';
        $customer_role->save();
        $customer_role->permissions()->attach($createTasks);

    }
}
