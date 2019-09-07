<?php

function getSetting($settingname = 'sitename')
{


    return \App\SiteSetting::where('namesetting', $settingname)->get()[0]->value;
}
function bu_type()
{
    $array = [
        'شقة',
        'فبلا',
        'شاليه',
    ];
    return $array;
}
function bu_rent()
{
    $array = [
        'تمليك',
        'ايجار',

    ];
    return $array;
}
function bu_admin()
{
    $array = [
        'عضو',
        'مدير الموقع',

    ];
    return $array;
}
function bu_status()
{
    $array = [
        'غير مفعل',
        'مفعل',

    ];
    return $array;
}
function viewContact()
{
    $array = [
        'تمت مشاهدة',
        'لم يتم المشاهدة',

    ];
    return $array;
}
function bu_place()
{
    return [
        "5" => "اسوان",
        "6" => "اسيوط",
        "4" => "الاسكندرية",
        "13" => "الاسماعيلية",
        "15" => "الاقصر",
        "24" => "البحر الاحمر",
        "7" => "البحيرة",
        "2" => "الجيزة",
        "9" => "الدقهلية",
        "28" => "السويس",
        "25" => "الشرقية",
        "12" => "الغربية",
        "11" => "الفيوم",
        "1" => "القاهرة",
        "22" => "القليوبية",
        "18" => "المنوفية",
        "17" => "المنيا",
        "19" => "الوادي الجديد",
        "8" => "بني سويف",
        "21" => "بور سعيد",
        "27" => "جنوب سيناء",
        "3" => "حلوان",
        "10" => "دمياط",
        "26" => "سوهاج",
        "20" => "شمال سيناء",
        "23" => "قنا",
        "14" => "كفر الشيخ",
        "16" => "مرسي مطروح",

    ];
}
function correct()
{
    return [
        'bu_price' => "السعر",
        'bu_price_from' => " السعر من",
        'bu_price_to' => "السعر الى",
        'rooms' => "عدد الغرف",
        'bu_type' => "نوع العقار",
        'bu_rent' => "نوع العملية",
        'bu_square' => 'مساحة العقار',
        'bu_place' => 'المنطقة',
    ];
}
function image($req)
{
    return  $req != '' ? asset('storage/' . $req) : getSetting('no_image');
}

function address()
{
    return [
        'اعجاب',
        'مشكلة ',
        'اقتراح',
        'استفسار',

    ];
}


function unread()
{
    return App\Contact::where('view', 1)->get();
}
function counter()
{
    return App\Contact::where('view', 1)->count();
}
function buCounter($status)
{
    return App\Bu::where('bu_status', $status)->count();
}
function unactBu()
{
    return App\Bu::where('bu_status', 0)->get();
}

function setActive($array, $class = 'active')
{

    if (!empty($array)) {
        $seg_array = [];
        foreach ($array as $key => $url) {
            if (Request::segment($key + 1) == $url) {
                $seg_array[] = $key;
            }
        }
        if (count($seg_array) == count(Request::segments())) {
            return $class;
        }
    }
}

function mybuildings()
{
    $user = Auth::user()->id;

    return App\Bu::where('user_id', $user)->count();
}
