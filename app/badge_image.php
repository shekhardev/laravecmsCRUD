<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class badge_image extends Model
{
  use SoftDeletes;

  protected $dates = ['is_deleted'];

}
