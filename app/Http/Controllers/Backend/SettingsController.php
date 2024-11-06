<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(Request $request)
    {

        if ($request->isMethod('GET')) {
            return view('backend.page.settings.settings');
        } else {

            $data = [
                'site_name' => $request->input('site_name'),
                'site_email' => $request->input('site_email'),
                'site_address' => $request->input('site_address'),
                'google_map_url' => $request->input('google_map_url'),
                'social.facebook' => $request->input('facebook'),
                'social.x' => $request->input('x'),
                'social.linkedin' => $request->input('linkedin'),
                'social.instagram' => $request->input('instagram'),
                'site_telephone'=>$request->input('site_telephone'),
                'description'=>$request->input('description'),
                'working_hour'=>$request->input('working_hour'),
            ];


            setting($data)->save();

            return redirect()->route('admin.settings');

        }
    }
}
