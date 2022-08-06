<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::updateOrCreate([
            'lang_name' => 'PHP',
        ]);
        
        Language::updateOrCreate([
            'lang_name' => 'nodeJS',
        ]);
        
        Language::updateOrCreate([
            'lang_name' => 'Java',
        ]);
        
        Language::updateOrCreate([
            'lang_name' => 'Python',
        ]);
        
        Language::updateOrCreate([
            'lang_name' => 'Flutter',
        ]);
    }
}
