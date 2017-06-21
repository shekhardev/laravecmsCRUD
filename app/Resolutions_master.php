<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolutions_master extends Model
{
  use SoftDeletes;

  protected $dates = ['is_deleted'];

}
