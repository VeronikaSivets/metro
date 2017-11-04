<?php

namespace App\Http\Controllers;

use App\Setting;

class SettingsController
{
    	public function index() {
		$settings = Setting::all();
		return view('settings', ['settings' => $settings]);
	}

	public function get($id) {
		$setting = Setting::find($id);
		return view('settings.index', ['setting' => $setting]);
	}
}
