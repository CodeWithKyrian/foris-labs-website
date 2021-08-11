<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager_role = Role::query()->where('slug', 'manager')->first();
        $customer_role = Role::where('slug', 'customer')->first();
        $kyrian = User::create([
            'name' => 'Kyrian Obikwelu',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
            'position' => 'CEO/Co-Founder',
            'profile_img' => '/img/kyrian.svg'
        ]);
        $john = User::create([
            'name' => 'John Onuigbo',
            'email' => 'johnonuigbo6@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
            'position' => 'CEO/Co-Founder',
            'profile_img' => '/img/john.svg'
        ]);
        $kyrian->roles()->attach($manager_role);
        $john->roles()->attach($manager_role);

        User::factory(10)->hasAttached($customer_role)->create();
    }
}
