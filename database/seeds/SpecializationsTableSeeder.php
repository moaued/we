<?php

use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();
        $specializations = [
            ['en'=> 'space material', 'ar'=> 'مادة المساحة'],
            ['en'=> 'Building material material and construction technology', 'ar'=> 'مادة مواد البناء وتكنولوجيا البناء'],
            ['en'=> 'Structural analysis material', 'ar'=> 'مادة التحليل الإنشائي'],
            ['en'=> 'Building planning and engineering drawing', 'ar'=> 'مادة تخطيط المباني والرسم الهندسي'],
            ['en'=> 'The difference between the history and theory of architecture', 'ar'=> 'الفرق بين تاريخ ونظرية العمارة'],
            ['en'=> 'The history of architecture', 'ar'=> 'تاريخ العمارة'],
            ['en'=> 'The theory of architecture', 'ar'=> 'نظرية العمارة'],
            ['en'=> 'The history of architecture and the theory of architecture', 'ar'=> 'تاريخ العمارة ونظرية العمارة'],
            ['en'=> 'Calculus', 'ar'=> 'التفاضل والتكامل'],
            ['en'=> 'Engineering Mathematics', 'ar'=> 'الرياضيات الهندسية'],
            ['en'=> 'Digital Logic', 'ar'=> 'المنطق الرقمي'],
            ['en'=> 'Theory of Information', 'ar'=> 'نظرية المعلومات'],
            ['en'=> 'Theory of Information and Digital Logic', 'ar'=> 'نظرية المعلومات والمنطق الرقمي'],
            ['en'=> 'Theory of Information and Engineering Mathematics', 'ar'=> 'نظرية المعلومات والرياضيات الهندسية'],
            ['en'=> 'Theory of Information and Calculus', 'ar'=> 'نظرية المعلومات والتفاضل والتكامل'],
            ['en'=> 'Theory of Information and Digital Logic and Engineering Mathematics', 'ar'=> 'نظرية المعلومات والمنطق الرقمي والرياضيات الهندسية'],
            ['en'=> 'Theory of Information and Calculus and Engineering Mathematics', 'ar'=> 'نظرية المعلومات والتفاضل والتكامل والرياضيات الهندسية'],
            ['en'=> 'Theory of Information and Calculus and Digital Logic', 'ar'=> 'نظرية المعلومات والتفاضل والتكامل والمنطق الرقمي'],

            ['en'=> 'Theory of Information and Digital Logic and Calculus', 'ar'=> 'نظرية المعل']



        ];

        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
