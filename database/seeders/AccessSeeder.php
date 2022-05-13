<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Access;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Access::create([
            'id' => 1,
            'role' => 'user'
        ]);
        Access::create([
            'id' => 2,
            'role' => 'admin'
        ]);
    }
}
