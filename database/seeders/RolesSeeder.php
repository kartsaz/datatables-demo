<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            Role::ADMIN => 'Administrator',
            Role::USER => 'User',
        ];

        foreach ($roles as $id => $name) {
            Role::updateOrCreate(['id' => $id], [
                'id' => $id,
                'name' => $name,
            ]);
        }
    }
}
