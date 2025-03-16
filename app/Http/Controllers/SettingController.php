<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();
        return view('settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'next_button' => 'required|boolean',
        ]);

        $setting = Setting::first();
        $setting->next_button = $request->next_button;
        $setting->save();

        return redirect()->route('settings.edit')->with('success', 'Setting updated successfully!');
    }
}
