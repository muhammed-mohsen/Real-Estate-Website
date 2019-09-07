<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting)
    {
        $siteSettings = $siteSetting->all();
        return view('admin.sitesettings.index', compact('siteSettings'));
    }
    public function store(Request $request, SiteSetting $siteSetting)
    {
        // dd(array_except($request->toArray(), ['_token', 'submit']));
        // dd($request->main_slider);
        foreach (array_except($request->all(), ['_token', 'submit']) as $key => $req) {
            $siteSettingUpdate = $siteSetting->where('namesetting', $key)->first();
            // dd($siteSettingUpdate);
            if ($siteSettingUpdate->type != 2) {
                $siteSettingUpdate->update(['value' => $req]);
                // $siteSettingUpdate->fill(['value' => $value])->save();
            } else {
                Storage::delete($siteSettingUpdate->value);
                // dd($siteSettingUpdate);
                $image = $request->main_slider->store('slider');
                // dd($siteSettingUpdate->value);3
                // $delete_path = base_path() . '/storage/' . $siteSettingUpdate->value;
                // File::delete($delete_path);

                $siteSettingUpdate->update(['value' => $image]);
            }
        }

        session()->flash('success', 'تم تغير بيانات الموقع بنجاح');
        return redirect()->back();
    }
}
