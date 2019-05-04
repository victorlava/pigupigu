<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $languages = ['lt' => 'Lithuanian', 'en' => 'English'];

      foreach ($languages as $code => $language) {
        $data['code'] = $code;
        $data['name'] = $language;
        Language::insert($data);
      }

    }
}
