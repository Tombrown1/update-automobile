<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $users = User::where('deleted', 0)->get();

        // return $settings;
        return view('admin.setting', compact('setting', 'users'));
    }

    public function updateSetting(Request $request)
    {       
       $this->validate($request, [
        'sitename' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'twitter' => 'required|string',
        'facebook' => 'required|string',
        'linkedin' => 'required|string',
       ]); 
       
    //    return $request;

       $setting = Setting::find(1);
       $setting->sitename = $request->sitename;
       $setting->email = $request->email;
       $setting->phone = $request->phone;
       $setting->address = $request->address;
       $setting->facebook = $request->facebook;
       $setting->twitter = $request->twitter;
       $setting->linkedin = $request->linkedin;

    //    return $setting;

       $setting->save();

       return back()->with('success', 'Setting is update successfully!');
    }

    public function aboutsetting(Request $request)
    {
      $this->validate($request, [
        'about' => 'required|string',
        'vision' => 'required|string',
        'mission' => 'required|string',
        'core_value' => 'required|string',
       ]); 

      //  return $request;
       $aboutsetting = Setting::find(1);
       $aboutsetting->about = $request->about;
       $aboutsetting->vision = $request->vision;
       $aboutsetting->mission = $request->mission;
       $aboutsetting->core_value = $request->core_value;

       $aboutsetting->save();

       return back()->with('success', 'About us Information updated successfully!');
    }

    public function logoUpload(Request $request)
    {
      $this->validate($request, [
         'logo' => 'required|image|mimes:jpeg,jpg,png,gif,svg,pdf|max:2048'
      ]);

      if($request->file('logo'))
      {
         $file = $request->file('logo');
         $logo = Storage::disk('public')->putFile('logo', $file);
      }

      $logoUpload = Setting::find(1);
      $logoUpload->logo = $logo;
      $logoUpload->save();

      return back()->with('success', 'Logo Uploaded Successfully!');
    }

   
}
