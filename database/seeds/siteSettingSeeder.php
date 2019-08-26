<?php

use App\SiteSetting;
use Illuminate\Database\Seeder;

class siteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SiteSetting::create([
            'slug' => 'اسم الموقع',
            'value' => 'موقع عقارات',
            'namesetting' => 'sitename'


        ]);
        SiteSetting::create([
            'slug' => 'الموبايل',
            'value' => '020162006209',
            'namesetting' => 'mobile'

        ]);
        SiteSetting::create([
            'slug' => 'الفيس بوك', 'value' => 'https://www.facebook.com/profile.php?id=100012880806990', 'namesetting' => 'facebook'

        ]);
        SiteSetting::create([
            'slug' => 'لينكد ان', 'value' => 'https://www.linkedin.com/in/muhammed-mohsen98/', 'namesetting' => 'linkedin'

        ]);
        SiteSetting::create([
            'slug' => 'العنوان', 'namesetting' => 'address',
        ]);
        SiteSetting::create([
            'slug' => 'يوتيوب', 'value' => 'https://www.youtube.com/results?search_query=%D9%85%D8%B4%D8%A7%D8%B1%D9%8A+%D8%A7%D9%84%D8%B9%D9%81%D8%A7%D8%B3%D9%8A+%D9%85%D8%B9+%D8%A7%D9%84%D9%84%D9%87', 'namesetting' => 'YouTube'

        ]);
        SiteSetting::create([
            'slug' => 'الكلمات الدلالية', 'namesetting' => 'keywords',  'type' => 1

        ]);
        SiteSetting::create([
            'slug' => 'وصف الموقع',
            'namesetting' => 'dis', 'type' => 1

        ]);
    }
}
