<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::factory()->times(10)->create();

        DB::table('roles')->insert([
            'name' =>'Flight Schedule'
        ]);

        DB::table('roles')->insert([
            'name' =>'News'
        ]);

        DB::table('roles')->insert([
            'name' =>'Travel Advisory'
        ]);
        DB::table('roles')->insert([
            'name' =>'Refund Portal'
        ]);
    }
}
