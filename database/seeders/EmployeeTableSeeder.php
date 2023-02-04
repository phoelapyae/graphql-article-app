<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'ee_id'         => 'E02387',
            'fullname'      => 'Emily Davis',
            'job_title'     => 'Sr. Manger',
            'gender'        => 'Female',
            'age'           => 55,
            'hire_date'     => '2022-01-01',
            'annual_salary' => 10000,
            'bonus'         => 10
        ]);
    }
}
