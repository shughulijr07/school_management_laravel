<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Nursery', 'code' => 'NL'],
            ['name' => 'Primary', 'code' => 'PL'],
            ['name' => 'Ordinary Level', 'code' => 'N'],
            ['name' => 'Advanced Level', 'code' => 'P'],
        ];

        DB::table('class_types')->insert($data);

    }
}
