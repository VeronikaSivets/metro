<?php

use Illuminate\Database\Seeder;
use App\Setting;
use App\Disease;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingsTableSeeder::class);
    }
}

class SettingsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('settings')->delete();

        $setting1 = Setting::create(['title' => 'test1', 'img' => '/images/1.png']);
	
	$disease = new Disease;
	$disease->title = 'Dis 1';
	$disease->description = 'Descr 1';

	$setting1->diseases()->save($disease);
	
	$disease2 = new Disease;
	$disease2->title = 'Dis 2';
	$disease2->description = 'Descr 2';

	$setting1->diseases()->save($disease2);

	$setting2 = Setting::create(['title' => 'test2', 'img' => '/images/2.png']);
	$setting3 = Setting::create(['title' => 'test3', 'img' => '/images/3.png']);
    }
}
