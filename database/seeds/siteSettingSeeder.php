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
            'slug' => 'الفيس بوك', 'namesetting' => 'facebook'

        ]);
        SiteSetting::create([
            'slug' => 'تويتر', 'namesetting' => 'twitter'

        ]);
        SiteSetting::create([
            'slug' => 'العنوان', 'namesetting' => 'address',
        ]);
        SiteSetting::create([
            'slug' => 'يوتيوب', 'namesetting' => 'YouTube'

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
