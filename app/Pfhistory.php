<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pfhistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'pfhistory_id' => 'required',
        'edited_at' => 'required',
    );
}
