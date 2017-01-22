<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    // table name
   protected $table = 'activities';
   

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'act_no',
    	'act_name',
    	'act_beg_date',
    	'act_end_date',
    ];
    
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
