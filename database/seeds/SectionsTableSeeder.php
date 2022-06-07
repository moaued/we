<?php

use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        $Sections = [
            ['en' => 'a', 'ar' => 'ا'],
            ['en' => 'b', 'ar' => 'ب'],
            ['en' => 'c', 'ar' => 'ج'],
            ['en' => 'd', 'ar' => 'د'],
            ['en' => 'e', 'ar' => 'ا'],
            ['en' => 'f', 'ar' => 'ف'],
            ['en' => 'g', 'ar' => 'غ'],
            ['en' => 'h', 'ar' => 'ح'],
            ['en' => 'i', 'ar' => 'ح'],
            ['en' => 'j', 'ar' => 'ج'],
            ['en' => 'k', 'ar' => 'ك'],
            ['en' => 'l', 'ar' => 'ل'],
            ['en' => 'm', 'ar' => 'م'],
            ['en' => 'n', 'ar' => 'ن'],
            ['en' => 'o', 'ar' => 'و'],
            ['en' => 'p', 'ar' => 'ب'],
            ['en' => 'q', 'ar' => 'ق'],
            ['en' => 'r', 'ar' => 'ر'],
            ['en' => 's', 'ar' => 'س'],
            ['en' => 't', 'ar' => 'ت'],
            ['en' => 'u', 'ar' => 'ا'],
            ['en' => 'v', 'ar' => 'و'],
            ['en' => 'w', 'ar' => 'و'],
            ['en' => 'x', 'ar' => 'خ'],
            ['en' => 'y', 'ar' => 'ي'],
            ['en' => 'z', 'ar' => 'ز'],
          
        ];

        foreach ($Sections as $section) {
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => Grade::all()->unique()->random()->id,
                'Class_id' => ClassRoom::all()->unique()->random()->id
            ]);
        }
    }
}
