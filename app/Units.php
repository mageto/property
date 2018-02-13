<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    protected $table = 'unit_groups';

	public $fillable = ['account_id','user_id','alias','photo_1','photo_2','photo_3','photo_4','description','title','status','academic_year_id','course_year_id','term_id'];

}
