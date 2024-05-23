<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\careerCommonInfo;

class CareerCommonTbl extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        careerCommonInfo::insert([
            // site info data
        [
            'title' => 'Join Our Team ',
            'type' => 1,
            'career_text' => 'Are you passionate about our industries.',
            'career_footer' => 'For any spontaneous application, please send your profile to career@career.com',
        ]
        ]);
    }
}
