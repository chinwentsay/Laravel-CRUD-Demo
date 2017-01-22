<?php
require 'vendor/autoload.php';

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Activity;


class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('activities') -> delete();
      Activity::create([
        		'act_no' => 'act01',
        		'act_name' => 'titel',
        		'act_beg_date' => Carbon::now(),
        	 	'act_end_date' => Carbon::now()	,	
        		]);
      
        	
       
    }
}
