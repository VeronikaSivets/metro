<?php

namespace App\Http\Controllers;

use App\Disease;

class DiseasesController
{
	public function get($id) {
		$disease = Disease::find($id);
		return view('diseases.index', ['disease' => $disease]);
	}
}
