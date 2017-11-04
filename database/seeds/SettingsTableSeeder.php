<?php 
	namespace Database\Seed;
	use App\Setting;

	class SettingsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('settings')->delete();

        Setting::create(['title' => 'test1', 'img' => '/images/1.png']);
	Setting::create(['title' => 'test2', 'img' => '/images/2.png']);
	Setting::create(['title' => 'test3', 'img' => '/images/3.png']);
    }

}
