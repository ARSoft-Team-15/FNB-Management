<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accesses')->insert([
            [
                'id' => 1,
                'role' => 'user'
            ],[
                'id' => 2,
                'role' => 'admin'
            ]
        ]);
    }
}
