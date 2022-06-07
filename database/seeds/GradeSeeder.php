<?php

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();
        $grades = [
            ['en'=> 'civil section', 'ar'=> 'قسم مدني '],
            ['en'=> 'computer department', 'ar'=> 'قسم حاسبات'],
            ['en'=> 'Department of Architecture', 'ar'=> 'قسم عماره'],
            ['en'=> 'Department of Civil Engineering', 'ar'=> 'قسم بناء'],
            ['en'=> 'Department of Electrical Engineering', 'ar'=> 'قسم  الكهرباء'],
            ['en'=> 'Department of Mechanical Engineering', 'ar'=> 'قسم  الميكانيك'],
            ['en'=> 'Department of Chemical Engineering', 'ar'=> 'قسم الكيمياء'],

           

        ];

        foreach ($grades as $grade) {
            Grade::create(['Name' => $grade]);
        }

    }
}
