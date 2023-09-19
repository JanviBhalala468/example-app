<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customFaker = FakerFactory::create();

        $count = 5;
        //
        while ($count > 0) {
            $name = $customFaker->name;
            $pass = 'pass1234';
            DB::table('_members')->insert([
                'name' => $name,
                'number' => random_int(1000000000, 9999999999)
            ]);
            $count--;
        }
    }
}