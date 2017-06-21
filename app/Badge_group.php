<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge_group extends Model
{
    use SoftDeletes;

    protected $dates = ['is_deleted'];
}
