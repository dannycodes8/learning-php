<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use \App\Models\practice;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('students')->insert([
        'std_name'=>'danny',
        'std_course'=>'computer science',

        
        'std_name'=>'Daniel',
        'std_course'=>'engineerin'

       ]);
    }
}
