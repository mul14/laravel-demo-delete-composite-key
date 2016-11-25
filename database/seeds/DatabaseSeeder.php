<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $data = [];

        foreach(range(1, 100) as $index)
        {
            $data[] = [
                'kode_a' => $index,
                'kode_b' => $index+1,
                'kode_c' => $index+2,
                'kode_d' => $index+3,
                'kode_e' => $index+4
            ];
        }

        \DB::table('rooms')->insert($data);
    }
}
