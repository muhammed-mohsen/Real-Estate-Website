<?php

use Illuminate\Database\Seeder;
use App\Bu;

class BuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bu::create([
            'bu_name' => "محمد محسن ",
            'bu_price' => '1022342',
            'bu_square' => " 20l.4",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 1,
            'bu_type' => 1,
            'bu_status' => 1,
            'bu_large_dis' => 'سيارة للبع احلى مسا على كواتشاتها',
            'user_id' => 2,
            'rooms' => 6,
            'bu_place' => '2'
        ]);
        Bu::create([
            'bu_name' => "محمد محسن ",
            'bu_price' => '102142',
            'bu_square' => " 20l1",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 1,
            'bu_type' => 1,
            'bu_status' => 1,
            'bu_large_dis' => 'سيارة للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 5,
            'bu_place' => '2'

        ]);
        Bu::create([
            'bu_name' => "مصطفى محسن ",
            'bu_price' => '102142',
            'bu_square' => " 30l.4",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 0,
            'bu_type' => 2,
            'bu_status' => 0,
            'bu_large_dis' => 'بيت للبع احلى مسا على كواتشاتها',
            'user_id' => 3,
            'rooms' => 12,
            'bu_place' => '2'
        ]);
        Bu::create([
            'bu_name' => " محسن عبدالعزيز ",
            'bu_price' => '102042',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 0,
            'bu_type' => 1,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '1'
        ]);
        Bu::create([
            'bu_name' => " محسن عبدالعزيز ",
            'bu_price' => '102042',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 0,
            'bu_type' => 2,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '2'
        ]);
        Bu::create([
            'bu_name' => " محسن عبدالعزيز ",
            'bu_price' => '102042',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 1,
            'bu_type' => 1,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '2'
        ]);
        Bu::create([
            'bu_name' => " محسن عبدالعزيز ",
            'bu_price' => '102142',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "خالى بالك من حماتك حماتك اتوميك بومب",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 1,
            'bu_type' => 2,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '2'
        ]);

        Bu::create([
            'bu_name' => " فيلا فى السادس للبيع ",
            'bu_price' => '102142',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "فيلا 1000 متر عى الطريق الدئري بجوار مسجد المدينة الجامعية تحت كشك عم ابراهيم عنده خمس اولاد ",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 1,
            'bu_type' => 0,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '1'
        ]);
        Bu::create([
            'bu_name' => " فيلا فى السادس للبيع ",
            'bu_price' => '102042',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "فيلا 1000 متر عى الطريق الدئري بجوار مسجد المدينة الجامعية تحت كشك عم ابراهيم عنده خمس اولاد ",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 0,
            'bu_type' => 0,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '1'
        ]);
        Bu::create([
            'bu_name' => " فيلا فى السادس للبيع ",
            'bu_price' => '102042',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "فيلا 1000 متر عى الطريق الدئري بجوار مسجد المدينة الجامعية تحت كشك عم ابراهيم عنده خمس اولاد ",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 0,
            'bu_type' => 2,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '1'
        ]);
        Bu::create([
            'bu_name' => " فيلا فى السادس للبيع ",
            'bu_price' => '102042',
            'bu_square' => " 50l.4",
            'bu_small_dis' => "فيلا 1000 متر عى الطريق الدئري بجوار مسجد المدينة الجامعية تحت كشك عم ابراهيم عنده خمس اولاد ",
            'bu_meta' => "لكل ظالم نهاية ",
            'bu_longtitude' => "22.2",
            'bu_latitude' => "20,3",
            'bu_rent' => 1,
            'bu_type' => 1,
            'bu_status' => 1,
            'bu_large_dis' => 'حمار للبع احلى مسا على كواتشاتها',
            'user_id' => 1,
            'rooms' => 11,
            'bu_place' => '3'
        ]);
    }
}
