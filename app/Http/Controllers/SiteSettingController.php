<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;

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
        // dd($request->all());
        foreach (array_except($request->all(), ['_token', 'submit']) as $key => $value) {
            $siteSettingUpdate = $siteSetting->where('namesetting', $key)->first()->update(['value' => $value]);
            // $siteSettingUpdate->fill(['value' => $value])->save();
        }

        session()->flash('success', 'تم تغير بيانات الموقع بنجاح');
        return redirect()->back();
    }
}
